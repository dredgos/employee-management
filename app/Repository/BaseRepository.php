<?php

namespace app\Repository\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\DataBase\Eloquent\Model;
use app\Contracts\UserRepositoryInterface\BaseRepositoryInterface;
use Illuminate\Contracts\Routing\ResponseFactory;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll() : Collection
    {
        return Model::all();
    }

    public function getById(int $id) : Model
    {
        return Model::find($id);
    }

    public function create(Request $request) : Model
    {
        $data = $request->all();

        return Model::create($data);
    }

    public function update(Request $request, Model $model) : Model
    {
        $data = $request->all();

        $model->fill($data)->save();

        return $model;
    }

    public function delete(Model $model) : ResponseFactory
    {
        $model->delete();

        return response(null, 204);
    }

}