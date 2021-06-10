<?php

namespace app\Repository\BaseRepository;
use Illuminate\DataBase\Eloquent\Model;
use app\Contracts\UserRepositoryInterface\BaseRepositoryInterface;


class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

       public function getAll()
    {
        return Model::all();
    }

}