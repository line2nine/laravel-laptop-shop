<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function showFormLogin()
    {
        return view('login');
    }

    function showIndex()
    {
        return view('admin.dashboard');
    }

    function login(Request $request)
    {
        if ($request->username == 'admin' && $request->password == 'admin'){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('form.login');
        }
    }
}
