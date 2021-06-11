<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TrainingDate extends Model
{
    use HasFactory;

  protected $fillable = [
        'training_dates',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
