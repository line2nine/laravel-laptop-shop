<?php


namespace App\Http\Services;


use App\Http\Controllers\Role;
use App\Http\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        $user->role = $request->role;
        if ($request->hasFile('image')) {
            $user->image = $request->image->store('images', 'public');
        }
        $this->userRepo->save($user);
    }

    public function changePass($user, $request)
    {
        $user->password = Hash::make($request->password);
        $this->userRepo->save($user);
    }

    public function searchByKeyword($request)
    {
        $keyword = $request->keyword;
        return $this->userRepo->searchUser($keyword);
    }
}
