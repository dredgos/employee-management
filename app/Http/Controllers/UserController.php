<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IRepository\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    private $userRepository;

      public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        try {
            $users = $this->userRepository->getAll();
        } catch(ModelNotFoundException $exception) {
             return view('users.notfound', ['error' => $exception->getMessage()]);     
        }
        return view("users", ["users" => $users]);
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


}
