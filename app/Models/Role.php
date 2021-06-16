<?php

namespace App\Models;

use App\Models\User;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name',
        'job_description',
        'user_id',

        ];

    public function departments()
    {   
        return $this->belongsToMany(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}