<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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

        \alert("Created Successful",'','success')->autoClose(2000)->timerProgressBar();
        return redirect()->route('customer.list');
    }

    function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        notify("Deleted $customer->name",'success');
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

        toast('Update Complete','success')->autoClose(3000)->timerProgressBar();
        return redirect()->route('customer.list');
    }

    function customerDetail($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.detail', compact('customer'));
    }
}
