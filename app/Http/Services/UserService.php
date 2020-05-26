<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepo;
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAllUser()
    {
        return $this->userRepo->getAll();
    }

    public function findById($id)
    {
        return $this->userRepo->find($id);
    }

    public function changePassword($user,$request) {
        $user->password = Hash::make($request->password);
        $this->userRepo->save($user);
    }

}
