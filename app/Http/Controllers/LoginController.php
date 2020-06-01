<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function showFormLogin()
    {
        return view('login');
    }

    function login(LoginRequest $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = [
            'email' => $username,
            'password' => $password
        ];

        if (Auth::attempt($user)) {
            if (Auth::user()->role !== Role::ADMIN && Auth::user()->role !== Role::MODERATOR) {
                notify("Long time no see, let shop!!!", 'success', 'Welcome!');
                return redirect()->route('index');
            } else {
                notify("Long time no see, let back to work", 'success', 'Welcome!');
                return redirect()->route('admin.dashboard');
            }
        } else {
            notify('Please re-check email or password', 'error', 'Something wrong!');
            return back();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
