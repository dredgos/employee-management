<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\BaseRepository;
use Illuminate\Support\Facades\Auth;
use App\Contracts\IRepository\UserRepositoryInterface;
use App\Http\Requests\UpdateProfileRequest;
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

    public function updateUser(int $id, UpdateProfileRequest $request) : User
    {
        $user = User::find($id);
        $data = $request->all();
        $user->update($data);
        $user->profile_completed = true;
        $user->save();
        return $user;
    }
}