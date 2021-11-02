<?php

use App\Http\Controllers\AbogadoController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\DemandadoController;
use App\Http\Controllers\DemandanteController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\JuezController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProcuradorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::resource('users', UserController::class)->only(['index','edit','update'])->names('users');
Route::resource('personas', PersonaController::class)->names('personas');
Route::resource('demandantes', DemandanteController::class)->names('demandantes');
Route::resource('demandados', DemandadoController::class)->names('demandados');
Route::resource('juezs', JuezController::class)->names('juezs');
Route::resource('abogados', AbogadoController::class)->names('abogados');
Route::resource('procuradors', ProcuradorController::class)->names('procuradors');
Route::resource('expedientes', ExpedienteController::class)->names('expedientes');
Route::resource('archivos', ArchivoController::class)->names('archivos');

//Route::get('/archivos',ArchivoController::class,'archivos.index')->name('archivos.index');
//Route::post('archivos', ArchivoController::class,'store')->name('archivos.store');
Route::post('archivos/{expediente}', [ArchivoController::class,'crear'])->name('archivos.crear');
Route::post('files/{expediente}', [ArchivoController::class,'mostrar'])->name('files.mostrar');


Route::get('search/juezs', [SearchController::class, 'juezs'])->name('search.juezs');
Route::get('search/abogados', [SearchController::class, 'abogados'])->name('search.abogados');
Route::get('search/procuradors', [SearchController::class, 'procuradors'])->name('search.procuradors');
Route::get('search/demandados', [SearchController::class, 'demandados'])->name('search.demandados');
Route::get('search/demandantes', [SearchController::class, 'demandantes'])->name('search.demandantes');







/* Route::get('prueba', function () {
    return "Has accedido correctamente a esta ruta";
})->middleware(['auth:sanctum','age']);

Route::get('no-autorizado', function () {
    return "Usted no es mayor de edad";
});
 */