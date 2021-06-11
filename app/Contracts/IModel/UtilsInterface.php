<?php
namespace App\Contracts;
use App\User;
use Illuminate\Support\Collection;
interface UtilsInterface
{
    public function daysBetweenDates(): int;
}