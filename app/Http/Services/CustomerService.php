<?php


namespace App\Http\Services;


use App\Customer;
use App\Http\Repositories\CustomerRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CustomerService
{
    protected $customerRepo;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }

    public function getAll()
    {
        return $this->customerRepo->getAll();
    }

    public function find($id)
    {
        return $this->customerRepo->find($id);
    }

    public function create($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->age = $request->age;
        $customer->address = $request->address;
        if ($request->hasFile('image')) {
            $customer->image = $request->image->store('images', 'public');
        } else {
            $customer->image = 'images/default-avatar.png';
        }
        $this->customerRepo->save($customer);
    }

    public function update($customer, $request)
    {
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->age = $request->age;
        $customer->address = $request->address;
        $oldFilePath = $customer->image;
        $newFilePath = $request->image;
        if ($oldFilePath !== 'images/default-avatar.png' && $newFilePath !== null) {
            Storage::delete("public/" . $oldFilePath);
        }
        if ($request->hasFile('image')) {
            $customer->image = $request->image->store('images', 'public');
        }
        $this->customerRepo->save($customer);
    }

    public function searchByKeyword($request)
    {
        $keyword = $request->keyword;
        if ($keyword){
            return $this->customerRepo->searchCustomer($keyword);
        }
        return false;
    }
}
