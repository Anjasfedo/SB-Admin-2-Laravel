<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\BlankController;
use App\Http\Controllers\ErrorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Dashboard.index');
});

Route::resource('/dashboard', DashboardController::class);
Route::resource('/table', TableController::class);
Route::resource('/chart', ChartController::class);
Route::resource('/blank', BlankController::class);
Route::resource('/error', ErrorController::class);