<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contracts\IRepository\UserRepositoryInterface;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;
use Exception;

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

    public function update(UpdateProfileRequest $request,  int $id) 
    {
        try {
            $user = $this->userRepository->currentAuthUser();
            $this->userRepository->updateUser($id, $request);
        } catch (Exception $exception) {
            return view('users.notfound', ['error' => $exception->getMessage()]);
            
        }
        return redirect()->route('dashboard', ["user" => $user]);
    }
}
