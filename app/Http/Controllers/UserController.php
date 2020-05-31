<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordUserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    protected $userService;

    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function showDashboard()
    {
        return view('admin.dashboard');
    }

    function getAll()
    {
        $users = $this->userService->getAll();
        return view('users.list', compact('users'));
    }

    function create()
    {
        return view('users.create');
    }

    function store(CreateUserRequest $request)
    {
        $this->userService->create($request);
        \alert("Created Successful", '', 'success')->autoClose(2000)->timerProgressBar();
        return redirect()->route('user.list');
    }

    function delete($id)
    {
        $user = $this->userService->find($id);
        $filePath = $user->image;
        $user->delete();
        if ($filePath !== 'images/default-avatar.png' && $filePath !== 'images/default-admin.png') {
            Storage::delete("public/" . $filePath);
        }
        notify("Deleted user $user->name", 'success');
        return redirect()->route('user.list');
    }

    function edit($id)
    {
        $user = $this->userService->find($id);
        if (Auth::user()->id == $user->id || Auth::user()->role == Role::ADMIN) {
            return view('users.edit', compact('user'));
        }
        return abort(403);
    }

    function update(EditUserRequest $request, $id)
    {
        $user = $this->userService->find($id);
        $this->userService->update($user, $request);
        toast('Update Completed', 'success')->position('top')->autoClose(3000)->timerProgressBar();
        return redirect()->route('user.list');
    }

    function changePass($id)
    {
        $user = $this->userService->find($id);
        if (Auth::user()->role == $user->id) {
            return view('users.changePass', compact('user'));
        }
        return abort(403);
    }

    function updatePass(ChangePasswordUserRequest $request, $id)
    {
        $user = $this->userService->find($id);
        if ($this->userService->checkPass($request)) {
            $this->userService->changePass($user, $request);
            alert('Successful', 'Your password has been changed', 'success')->autoClose(2000);
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Wrong current password, try again');
    }

    function userDetail($id)
    {
        $user = $this->userService->find($id);
        return view('users.detail', compact('user'));
    }

    function search(Request $request)
    {
        if ($this->userService->searchByKeyword($request)) {
            $users = $this->userService->searchByKeyword($request);
            return view('users.list', compact('users'));
        }
        return redirect()->route('user.list');
    }
}
