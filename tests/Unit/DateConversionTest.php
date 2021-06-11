<?php

namespace Tests\Unit;

use Carbon\Carbon;
use App\Models\Utils;
use PHPUnit\Framework\TestCase;

class DateConversionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_date_conversion()
    {
        $date1 = Carbon::createFromDate(2021, 10, 20);
        $date2 = Carbon::createFromDate(2021, 10, 25);
        $utils = new Utils();
        $numberOfDays = $utils->daysBetweenDates($date1, $date2);
        $this->assertSame(5, $numberOfDays);
    }
}
