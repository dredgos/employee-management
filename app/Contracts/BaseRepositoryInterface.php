<?php

namespace App\Contracts\UserRepositoryInterface;

interface BaseRepositoryInterface
{
    public function getAll();

    public function getById(int $id);
}