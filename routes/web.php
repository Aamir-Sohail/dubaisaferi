<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\userview\BookingController;
use App\Http\Controllers\userview\Contactcontroller;
use App\Http\Controllers\Admin\UserBookingController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//contact controller path...
Route::get('/contact', [Contactcontroller::class, 'index']);
Route::post('/store', [Contactcontroller::class, 'store']);
Route::get('/logout', [Contactcontroller::class, 'logout']);

//booking Controller
Route::get('/index', [BookingController::class, 'index']);
Route::post('storebooking', [BookingController::class, 'bookingstore']);

//admin dashboard...
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    //register User Controller
    Route::get('user', [UserController::class, 'index']);
    Route::get('edit_user/{user_id}', [UserController::class, 'edit']);
    Route::put('update_user/{user_id}', [UserController::class, 'update']);
    Route::get('delete_user/{user_id}', [UserController::class, 'destory']);
    //booking controller
    Route::get('booking',[UserBookingController::class,'index']);
    Route::get('edit_booking/{booking_id}', [UserBookingController::class, 'userbookingedit']);
    Route::put('update_booking/{booking_id}', [UserBookingController::class, 'bookingupdate']);
    Route::get('delete_booking/{booking_id}', [UserBookingController::class, 'deletebooking']);

    //Descripton Controller.

});
