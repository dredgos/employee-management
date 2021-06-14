<?php

namespace App\UserRepository;

use App\Models\User;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\DataBase\Eloquent\Model;
use App\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
    }
    
    public function currentAuthUser() : User
    {
        $user = Auth::user();
        if($user === null) {
            throw new ModelNotFoundException("User does not exist");
        }
        return $user;
    }
}