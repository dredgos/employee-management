<?php
namespace App\Contracts;
use App\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function getAll(): Collection;
}