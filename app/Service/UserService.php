<?php

namespace App\Service;

use App\Http\Requests\UserRegisterRequest;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class UserService
{
    private $userRepository;
    private $user_data;

    public function __construct(UserRepository $userRepository,Request $user_data)
    {
        $this->userRepository = $userRepository;
        $this->user_data = $user_data;
    }

    public function userRegister()
    {
        $user = $this->userRepository->formatUserFromHttpRequest($this->user_data);
        return $user->save();
    }
}