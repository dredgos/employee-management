<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;

    public function index()
    {
        
    }

    public function show(int $id)
    {
        
    }

    public function create(Request $request)
    {

    }

    public function update(Request $request)
    {
        # code...
    }

    public function destroy(int $id)
    {
        
    }
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        $users = $this->userRepository->getAll();
        return view("users", ["users" => $users]);
    }


}
