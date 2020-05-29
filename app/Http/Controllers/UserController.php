<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordUserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    protected $userService;

    function __construct(UserService $userService)
    {
//        $this->middleware('auth');
//        $this->middleware('isAdmin');
        $this->userService = $userService;
    }

    function showFormLogin()
    {
        return view('login');
    }

    function showFormChangePass($id)
    {
        $user = User::findOrFail($id);
        return view('users.changePass', compact('user'));
    }

    function showDashboard()
    {
        return view('admin.dashboard');
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
            notify("Long time no see, let get back to work",'success','Welcome!');
            return redirect()->route('admin.dashboard');
        } else {
            notify('Please re-check email or password','error','Something wrong!');
            return back();
        }
    }

    function getAll()
    {
        $users = User::all();
        return view('users.list', compact('users'));
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    function updatePass(ChangePasswordUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $oldPass = $request->oldPass;
        $newPass = $request->newPass;
        if (!Hash::check($oldPass, Auth::user()->password)){
            return back()->with('error','Wrong current password, try again');
        }
        $user->password = Hash::make($newPass);
        $user->save();
        alert('Successful','Your password has been changed','success')->autoClose(2000);
        return redirect()->route('admin.dashboard');
    }
}
