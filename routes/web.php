<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\HomeController;

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

Route::get('', [HomeController::class, 'index'])->name("homepage");
Route::match(["post","get"],'/donor/apply', [HomeController::class, 'insertDonor'])->name("insert.donor");
Route::get('/plasma/request', [HomeController::class, 'insertRequest'])->name("insert.request");
Route::get("/donor/manage",[HomeController::class,"manageDonor"])->name("donor.manage");
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
