<?php
namespace App\Contracts\IRepository;
use App\Models\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function getAll(): Collection;
    public function currentAuthUser() : User;
}