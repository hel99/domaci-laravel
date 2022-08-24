<?php

use App\Http\Controllers\API\AutfController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OsobaController;
use App\Http\Controllers\API\RacunController;


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



Route::post('register', [AutfController::class, 'register']);
Route::post('login', [AutfController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [AutfController::class, 'logout']);
    Route::resource('osoba', OsobaController::class)->only('index', 'update', 'show');
    Route::resource('racun', RacunController::class)->only('index', 'show', 'destroy');
});
