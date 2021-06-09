<?php

namespace app\Repository\BaseRepository;
use Illuminate\DataBase\Eloquent\Model;


class BaseRepository 
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

    public function getById(int $id)
    {
        return $id;
    }
}