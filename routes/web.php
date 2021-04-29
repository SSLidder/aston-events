<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/events', [App\Http\Controllers\EventsController::class, 'index'])->name('events');
Route::post('/bookSport', [App\Http\Controllers\EventsController::class, 'createSport']);
Route::post('/likeSport', [App\Http\Controllers\LikesController::class, 'createSport']);
Route::post('/destroy', [App\Http\Controllers\LikesController::class, 'destroy']);
Route::get('/bookings', [App\Http\Controllers\BookingsController::class, 'index'])->name('bookings')->middleware('auth');
Route::get('/sportsEvents', [App\Http\Controllers\SportsController::class, 'render'])->name('sportsEvents');
Route::get('/cultureEvents', [App\Http\Controllers\CulturesController::class, 'index'])->name('cultureEvents');
Route::post('/bookCulture', [App\Http\Controllers\EventsController::class, 'createCulture']);
Route::post('/likeCulture', [App\Http\Controllers\LikesController::class, 'createCulture']);
Route::get('/otherEvents', [App\Http\Controllers\OthersController::class, 'index'])->name('otherEvents');
Route::post('/bookOther', [App\Http\Controllers\EventsController::class, 'createOther']);
Route::post('/likeOther', [App\Http\Controllers\LikesController::class, 'createOther']);
Route::get('/sportEvent1', [App\Http\Controllers\SportsController::class, 'sportEvents'])->name('sportEvent1');
Route::get('/cultureEvent1', [App\Http\Controllers\CulturesController::class, 'cultureEvents'])->name('cultureEvent1');
Route::get('/otherEvent1', [App\Http\Controllers\OthersController::class, 'otherEvents'])->name('otherEvent1');