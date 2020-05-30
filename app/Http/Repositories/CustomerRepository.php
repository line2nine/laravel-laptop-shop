<?php


namespace App\Http\Repositories;


use App\Customer;

class CustomerRepository
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getAll()
    {
        return $this->customer->all();
    }

    public function find($id)
    {
        return $this->customer->findOrFail($id);
    }

    public function save($customer)
    {
        $customer->save();
    }

    public function searchCustomer($keyword)
    {
        return $this->customer->where('name', 'LIKE', '%' . $keyword . '%')->get();
    }
}
