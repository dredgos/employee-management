<?php
namespace App\Contracts;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function getAll();
    public function getById(int $id);
    public function create(Request $request);
    public function update(Request $request, Model $model);
    public function delete(Model $model);
}