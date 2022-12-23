<?php
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/stades',[StadeController::class, 'index']);
Route::get('/stades/{id}',[StadeController::class, 'show']);
Route::post('/stades/save',[StadeController::class, 'create']);
Route::put('/stades/update/{id}',[StadeController::class, 'update']);
Route::delete('/stades/delete/{id}',[StadeController::class, 'destroy']);

Route::get('/reservations',[ReservationController::class, 'index']);
Route::get('/reservations/{id}',[ReservationController::class, 'show']);
Route::post('/reservations/save',[ReservationController::class, 'create']);
Route::put('/reservations/update/{id}',[ReservationController::class, 'update']);
Route::delete('/reservations/delete/{id}',[ReservationController::class, 'destroy']);

