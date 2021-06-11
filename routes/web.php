<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HolidayRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix" => "dashboard"], function () {
    Route::get("/", [DashboardController::class, "index"])->middleware(['auth'])->name('dashboard');
    Route::group(["prefix" => "holiday-request"], function () {
        Route::get("holiday-request", [HolidayRequestController::class, "index"]);
        Route::post("holiday-request", [HolidayRequestController::class, "createHolidayRequest"]);
    });
    Route::group(["prefix" => "training-request"], function () {
        Route::get("training-request", [TrainingRequestController::class, "index"]);
         Route::post("training-request", [HolidayRequestController::class, "createTrainingRequest"]);
    });
    
    Route::group(["prefix" => "departments"], function () {
        Route::get("", [DepartmentController::class, "index"]);
        
        Route::group(["prefix" => "roles"], function () {
            Route::get("", [RoleController::class, "index"]);


        });
    });

    Route::group(["prefix" => "employees"], function () {
        Route::get("", [EmployeeController::class, "index"]);
        Route::group(["prefix" => "{id}"], function () {
            Route::get("", [EmployeeController::class, "show"]);
        });
    });
    
});



require __DIR__.'/auth.php';
