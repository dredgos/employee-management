<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\UserRepositoryInterface\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        $user = $userRepository->getAll();

    }
}
