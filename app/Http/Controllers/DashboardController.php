<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
