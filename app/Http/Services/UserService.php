<?php


namespace App\Http\Services;


use App\Http\Controllers\Role;
use App\Http\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserService
{
    protected $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function find($id)
    {
        return $this->userRepo->find($id);
    }

    public function create($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        if ($request->hasFile('image')) {
            $user->image = $request->image->store('images', 'public');
        } elseif ($user->role == Role::ADMIN || $user->role == Role::MODERATOR) {
            $user->image = 'images/default-admin.png';
        } else {
            $user->image = 'images/default-avatar.png';
        }
        $this->userRepo->save($user);
    }

    public function update($user, $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $oldFilePath = $user->image;
        $newFilePath = $request->image;
        if ($oldFilePath !== 'images/default-avatar.png' && $oldFilePath !== 'images/default-admin.png' && $newFilePath !== null) {
            Storage::delete("public/" . $oldFilePath);
        }
        if ($request->hasFile('image')) {
            $user->image = $request->image->store('images', 'public');
        }
        if (Auth::user()->role == Role::ADMIN) {
            $user->role = $request->role;
        }
        $this->userRepo->save($user);
    }

    public function changePass($user, $request)
    {
        $user->password = Hash::make($request->newPass);
        $this->userRepo->save($user);
    }

    public function checkPass($request)
    {
        if (Hash::check($request->oldPass, Auth::user()->password)) {
            return true;
        }
        return false;
    }

    public function searchByKeyword($request)
    {
        $keyword = $request->keyword;
        if ($keyword){
            return $this->userRepo->searchUser($keyword);
        }
        return false;
    }
}
