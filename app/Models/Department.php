<?php

namespace App\Models;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name',
        'address_1',
        'address_2',
        'town',
        'postcode',
        'department_head_id',
        'role_id'
    
        ];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

        public function users()
    {
        return $this->hasManyThrough(User::class, Role::class);
    }
}
