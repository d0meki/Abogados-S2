<?php

use App\Http\Controllers\ApiArchivoController;
use App\Http\Controllers\ApiExpedienteController;
use App\Http\Controllers\AuthController;
use App\Models\Expediente;
use Facade\FlareClient\Api;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/reg',[AuthController::class, 'register']);
Route::post('/log',[AuthController::class, 'login']);
Route::post('/userInfo',[AuthController::class, 'infoUser'])->middleware('auth:sanctum');

Route::get('/expediente',[ApiExpedienteController::class, 'index']);
Route::post('/archivos/{expediente}',[ApiArchivoController::class, 'mostrar']);
Route::post('/uploadFile',[ApiArchivoController::class, 'upload']);
Route::get('/download/{id}/{name}',[ApiArchivoController::class, 'download']);
