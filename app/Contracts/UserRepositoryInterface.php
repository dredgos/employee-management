<?php

namespace App\Contracts\UserRepositoryInterface;

use App\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function getAll(): Collection;
    
}