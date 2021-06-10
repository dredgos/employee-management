<?php

namespace app\Repository\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\DataBase\Eloquent\Model;
use app\Contracts\UserRepositoryInterface\BaseRepositoryInterface;
use Exception;
use Facade\FlareClient\Http\Exceptions\NotFound;
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
        $model = Model::all();
        if($model === null) {
            throw new NotFound("This collection does not currently exist in the database ");
        }
        return $model;
    }

    public function getById(int $id) : Model
    {
        $model = Model::find($id);
        if($model === null) {
            throw new NotFound("This instance does not currently exist in the database");
        }
        return $model;

    }

    public function create(Request $request) : Model
    {
        if($request === null) { 
            throw new Exception("The request field does not have the required fields for creating a new object");
        }
        
        $data = $request->all();

        return Model::create($data);
    }

    public function update(Request $request, Model $model) : Model
    {
        if($request === null) { 
            throw new Exception("The request field does not have the required fields for updating a new object");
        }

        $data = $request->all();

        $model->fill($data)->save();

        return $model;
     
    }

    public function delete(Model $model) : ResponseFactory
    {
        $model->delete();

        if ($model !== null) {
            throw new Exception("The delete function has not worked this time, please try again later.");
        }

        return response(null, 204);
    }

}