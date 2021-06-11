<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utils extends Model
{
    public function daysBetweenDates($date1, $date2): int
    {   
        return $date1->diffInDays($date2);
    }
}
