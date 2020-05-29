<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CreateCustomerRequest;
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

    function create(CreateCustomerRequest $request)
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
        $customer->save();

        \alert("Created Successful", '', 'success')->autoClose(2000)->timerProgressBar();
        return redirect()->route('customer.list');
    }

    function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        notify("Deleted customer $customer->name", 'success');
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

        if ($request->hasFile('image')) {
            $customer->image = $request->image->store('images', 'public');
        }
        $customer->save();

        toast('Update Complete', 'success')->autoClose(3000)->timerProgressBar();
        return redirect()->route('customer.list');
    }

    function customerDetail($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.detail', compact('customer'));
    }

    function search(Request $request)
    {
        $keyword = $request->keyword;
        if ($keyword) {
            $customers = Customer::where('name', 'LIKE', '%' . $keyword . '%')->get();
            return view('customers.list', compact('customers'));
        } else {
            return redirect()->route('customer.list');
        }
    }
}
