<?php
namespace App\Contracts\IRepository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function getAll(): Collection;
    public function currentAuthUser() : User;
    public function updateUser(int $id, Request $request) : User; 
}