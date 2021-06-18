<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;

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


Route::group(["prefix" => "dashboard",  ["middleware" => "auth"]], function () {
    Route::get("", [DashboardController::class, "index"])->name('dashboard');
});

Route::group(["prefix" => "departments"], function () {
    Route::get("/", [DepartmentController::class, "index"]);
    Route::get("/create", [DepartmentController::class, "create"]);
    Route::post("/create", [DepartmentController::class, "store"]);
    Route::group(["prefix" => "{id}"], function () {
        Route::get("", [DepartmentController::class, "index"]);
            Route::group(["prefix" => "roles"], function () {
                Route::get("/", [RoleController::class, "index"]);
                Route::get("/create", [RoleController::class, "create"]);
                Route::post("/create", [RoleController::class, "store"]);
            });
        });
    });

Route::group(["prefix" => "users"], function () {
    Route::get("/", [UserController::class, "index"])->name("users");
    Route::get("/create", [UserController::class, "create"])->name('users.create');
    Route::post("/create", [UserController::class, "store"])->name('users.store');
    Route::group(["prefix" => "{id}"], function () {
        Route::get("/", [UserController::class, "show"]);
        Route::patch("/", [DashboardController::class, "update"])->name("users.update");
    });
});



require __DIR__.'/auth.php';
