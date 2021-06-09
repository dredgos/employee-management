<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
