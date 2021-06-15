<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\DataBase\Eloquent\Model;
use App\Contracts\IRepository\UserRepositoryInterface;
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

    public function updateUser(int $id, Request $request) : User
    {
        $user = User::find($id);
        $data = $request->all();
        $user->update($data);
        $user->profile_completed = true;
        $user->save();
        return $user;
    }
}