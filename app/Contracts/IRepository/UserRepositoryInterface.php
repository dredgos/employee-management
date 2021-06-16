<?php
namespace App\Contracts\IRepository;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function getAll(): Collection;
    public function currentAuthUser() : User;
    public function updateUser(int $id, UpdateProfileRequest $request) : User; 
}