<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HolidayRequestController;
use App\Http\Controllers\TrainingRequestController;

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
    return view('auth.login');
});

Route::patch("employees/{id}", [DashboardController::class, "update"])->middleware('auth')->name('employees.update');

Route::get("create-user", [UserController::class, "getUserForm"])->middleware('auth')->name('create-user');


Route::group(["prefix" => "dashboard",  ["middleware" => "auth"]], function () {
    Route::get("", [DashboardController::class, "index"])->name('dashboard');
    Route::patch("", [DashboardController::class, "update"]);
    Route::group(["prefix" => "holiday-request"], function () {
        Route::get("/", [HolidayRequestController::class, "index"]);
        Route::post("/", [HolidayRequestController::class, "create"]);
        Route::patch("/", [HolidayRequestController::class, "update"]);
        Route::delete("/",[HolidayRequestController::class, "destroy"]);
    });
    Route::group(["prefix" => "training-request"], function () {
        Route::get("/", [TrainingRequestController::class, "index"]);
        Route::post("/", [TrainingRequestController::class, "create"]);
        Route::patch("/", [TrainingRequestController::class, "update"]);
        Route::delete("/", [TrainingRequestController::class, "destroy"]);
    });
    
    Route::group(["prefix" => "departments"], function () {
        Route::get("/", [DepartmentController::class, "index"]);
        Route::patch("/", [DepartmentController::class, "update"]);
        Route::delete('',[DepartmentController::class, "destroy"]);
        Route::group(["prefix" => "roles"], function () {
            Route::get("/", [RoleController::class, "index"]);
            Route::patch("/", [RoleController::class, "update"]);
            Route::delete("/",[RoleController::class, "destroy"]);
        });
    });

    Route::group(["prefix" => "employees"], function () {
        Route::get("/", [UserController::class, "index"]);
        Route::post("/", [UserController::class, "create"]);
        Route::group(["prefix" => "{id}"], function () {
            Route::get("/", [UserController::class, "show"]);
            Route::patch("/", [UserController::class, "update"]);
            Route::delete("/", [UserController::class, "destroy"]);
        });

    });
});


require __DIR__.'/auth.php';
