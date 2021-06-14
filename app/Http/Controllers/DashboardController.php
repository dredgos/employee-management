<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IRepository\UserRepositoryInterface;


class DashboardController extends Controller
{
    public $userRepository;
    
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $user = $this->userRepository->currentAuthUser();
        return view ("dashboard", ["user" => $user]);
    }
}
