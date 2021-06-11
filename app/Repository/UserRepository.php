<?php

namespace App\UserRepository;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\DataBase\Eloquent\Model;
use App\Repository\BaseRepository;
use App\Contracts\UserRepositoryInterface;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
    }
    
}