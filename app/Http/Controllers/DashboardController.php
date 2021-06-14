<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IRepository\UserRepositoryInterface;
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
        try {
            $user = $this->userRepository->currentAuthUser();
        } catch (ModelNotFoundException $exception) {
            return view('users.notfound', ['error' => $exception->getMessage()]);
        }
        return view ("dashboard", ["user" => $user]);
    }
}
