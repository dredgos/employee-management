$user = User::find(1);
$holiday = new App\Models\HolidayDate;
$holiday->holiday_start_date = Carbon\Carbon::createFromDate(2021, 11, 12);
$holiday->holiday_end_date = Carbon\Carbon::createFromDate(2021, 11, 22);
$holiday->user_id = 1;
$holiday->save();

$holiday = new App\Models\HolidayDate;
$holiday->user_id = 1;
$holiday->holiday_start_date = Carbon\Carbon::createFromDate(2021, 9, 12);
$holiday->holiday_end_date = Carbon\Carbon::createFromDate(2021, 9, 20);
$holiday->save();

$holiday = new App\Models\HolidayDate;
$holiday->user_id = 1;
$holiday->holiday_start_date = Carbon\Carbon::createFromDate(2021, 10, 12);
$holiday->holiday_end_date = Carbon\Carbon::createFromDate(2021, 10, 20);
$holiday->save();



$training = new App\Models\TrainingDate;
$training->user_id = 1;
$training->training_start_date = Carbon\Carbon::createFromDate(2021, 10, 12);
$training->training_end_date = Carbon\Carbon::createFromDate(2021, 10, 20);
$training->save();

$training = new App\Models\TrainingDate;
$training->user_id = 1;
$training->training_start_date = Carbon\Carbon::createFromDate(2021, 9, 12);
$training->training_end_date = Carbon\Carbon::createFromDate(2021, 9, 20);
$training->save();

$training = new App\Models\TrainingDate;
$training->user_id = 1;
$training->training_start_date = Carbon\Carbon::createFromDate(2021, 12, 12);
$training->training_end_date = Carbon\Carbon::createFromDate(2021, 12, 20);
$training->save();



$user->holidayDates;
