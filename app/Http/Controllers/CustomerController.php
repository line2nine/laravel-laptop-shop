<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\EditCustomerRequest;
use App\Http\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    function getAll()
    {
        $customers = $this->customerService->getAll();
        return view('customers.list', compact('customers'));
    }

    function create()
    {
        return view('customers.create');
    }

    function store(CreateCustomerRequest $request)
    {
        $this->customerService->create($request);

        \alert("Created Successful", '', 'success')->autoClose(2000)->timerProgressBar();
        return redirect()->route('customer.list');
    }

    function delete($id)
    {
        $customer = $this->customerService->find($id);
        $filePath = $customer->image;
        $customer->delete();
        if ($filePath !== 'images/default-avatar.png') {
            Storage::delete("public/" . $filePath);
        }
        notify("Deleted customer $customer->name", 'success');
        return redirect()->route('customer.list');
    }

    function edit($id)
    {
        $customer = $this->customerService->find($id);
        return view('customers.edit', compact('customer'));
    }

    function update(EditCustomerRequest $request, $id)
    {
        $customer = $this->customerService->find($id);
        $this->customerService->update($customer, $request);
        toast('Update Completed', 'success')->position('top')->autoClose(3000)->timerProgressBar();
        return redirect()->route('customer.list');
    }

    function customerDetail($id)
    {
        $customer = $this->customerService->find($id);
        return view('customers.detail', compact('customer'));
    }

    function search(Request $request)
    {
        if ($this->customerService->searchByKeyword($request)) {
            $customers = $this->customerService->searchByKeyword($request);
            return view('customers.list', compact('customers'));
        }
        return redirect()->route('customer.list');
    }
}
