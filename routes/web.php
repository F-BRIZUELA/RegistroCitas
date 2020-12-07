<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CombustibleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ApiAppsController;
use App\Http\Controllers\EspecialidadController;
use Illuminate\Http\Request;
use App\Http\Controllers\PersonasController;


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
})->middleware('auth');

Route::get('/listas', function () {
    return view('listas');
})->middleware('auth');

Route::post('/listas', function (Request $request) {
    return response()->json($request->all());
})->name('listas')->middleware('auth');

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){


    Route::prefix('calalogos')->group(function(){
        Route::prefix('especialidad')->group(function(){
            Route::get('', [EspecialidadController::class, 'index'])->name('especialidad');
            Route::get('add', [EspecialidadController::class, 'add'])->name('especialidad.add');
            Route::get('edit/{model}', [EspecialidadController::class, 'show'])->name('especialidad.edit');
            Route::post('', [EspecialidadController::class, 'store'])->name('especialidad.store');
            Route::patch('{model}', [EspecialidadController::class, 'update'])->name('especialidad.update');
            Route::delete('{model}', [EspecialidadController::class, 'destroy'])->name('especialidad.delete');
        });

        Route::prefix('catalogos')->group(function () {
            Route::get('especialidad', [CatalogosController::class, 'getEspecialidades']);
        });
    });

    Route::prefix('app')->group(function(){
        Route::prefix('personas')->group(function(){
            Route::get('', [PersonasController::class, 'index'])->name('persona');
            Route::get('add', [PersonasController::class, 'add'])->name('persona.add');
            Route::get('edit/{model}', [PersonasController::class, 'edit'])->name('persona.edit');
            Route::post('', [PersonasController::class, 'store'])->name('persona.store');
            Route::patch('{model}', [PersonasController::class, 'update'])->name('persona.update');
            Route::delete('{model}', [PersonasController::class, 'destroy'])->name('persona.delete');
        });
    });

    Route::prefix('catalogos')->group(function(){
        Route::prefix('colores')->group(function () {
            Route::get('', [ColorController::class, 'index'])->name('color');
            Route::get('add', [ColorController::class, 'add'])->name('color.add');
            Route::get('edit/{model}', [ColorController::class, 'edit'])->name('color.edit');
            Route::post('', [ColorController::class, 'store'])->name('color.store');
            Route::patch('{model}', [ColorController::class, 'update'])->name('color.update');
            Route::delete('{model}', [ColorController::class, 'destroy'])->name('color.delete');
        });

        Route::prefix('combustible')->group(function () {
            Route::get('', [CombustibleController::class, 'index'])->name('combustible');
            Route::get('add', [CombustibleController::class, 'add'])->name('combustible.add');
            Route::post('', [CombustibleController::class, 'store'])->name('combustible.store');
            Route::delete('{model}', [CombustibleController::class, 'destroy'])->name('combustible.delete');
            Route::get('edit/{model}', [CombustibleController::class, 'show'])->name('combustible.edit');
            Route::patch('{model}', [CombustibleController::class, 'update'])->name('combustible.update');
        });
        
        Route::prefix('catalogos')->group(function () {
            Route::get('combustible', [CatalogosController::class, 'getEspecialidades']);
        });
    });
});


/*
Rutas para catalogos de la api
*/
Route::middleware('auth')->group(function(){
    Route::prefix('api-app')->group(function(){
        Route::get('colores', [ApiAppsController::class, 'colores']);
        Route::get('sexos', [ApiAppsController::class, 'sexos']);
        Route::get('cooperativas', [ApiAppsController::class, 'cooperativas']);
        Route::get('barrios', [ApiAppsController::class, 'barrios']);
        Route::get('etnias', [ApiAppsController::class, 'etnias']);
    });
});