<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;

    function __construct(UserService $userService)
    {
//        $this->middleware('auth');
//        $this->middleware('isAdmin');
        $this->userService = $userService;
    }

    function getAll()
    {
        $users = $this->userService->getAllUser();
        return view('users.list', compact('users'));
    }
}
