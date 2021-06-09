<?php

namespace app\Repository\UserRepository;

use App\Models\User;
use Illuminate\DataBase\Eloquent\Model;
use app\Repository\BaseRepository\BaseRepository;
use App\Contracts\UserRepositoryInterface\UserRepositoryInterface;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
    
}