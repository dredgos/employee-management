<?php

namespace App\Models;

use App\Models\HolidayDate;
use App\Models\TrainingDate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'date_of_birth',
        'telephone',
        'address_1',
        'address_2',
        'town',
        'postcode',
        'join_date',
        'salary',
        'email_verified_at',
        'password',
        'isAdmin',
        'isSuperAdmin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function holidayDates()
    {
        return $this->hasMany(HolidayDate::class);
    }

    public function TrainingDates()
    {
        return $this->hasMany(TrainingDate::class);
    }
}
