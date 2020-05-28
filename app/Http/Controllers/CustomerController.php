<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    function getAll()
    {
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    function register()
    {
        return view('customers.register');
    }

    function create(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->age = $request->age;
        $customer->address = $request->address;
        $customer->save();

        Session::flash('success', "Customer $customer->name has been created successful");

        return redirect()->route('customer.list');
    }

    function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customer.list');
    }

    function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->age = $request->age;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('customer.list');
    }

    function customerDetail($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.detail', compact('customer'));
    }
}
