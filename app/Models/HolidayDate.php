<?php

namespace App\Models;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HolidayDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'holiday_start_date',
        'holiday_end_date',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function holdayEndDate()
    {
            $this->state([
            'holiday_start_date' => Carbon::createFromDate('2021-08-15')
        ]);
    }
}
