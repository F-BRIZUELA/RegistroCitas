<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CombustibleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ApiAppsController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\EspecialistaController;
use Illuminate\Http\Request;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ReservaCitaController;

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


    Route::prefix('catalogos')->group(function(){
        Route::prefix('especialidad')->group(function(){
            Route::get('especialidad', [CatalogosController::class, 'getEspecialidades']);
            Route::get('', [EspecialidadController::class, 'index'])->name('especialidad');
            Route::get('add', [EspecialidadController::class, 'add'])->name('especialidad.add');
            Route::get('edit/{model}', [EspecialidadController::class, 'show'])->name('especialidad.edit');
            Route::post('', [EspecialidadController::class, 'store'])->name('especialidad.store');
            Route::patch('{model}', [EspecialidadController::class, 'update'])->name('especiliadad.update');
            Route::delete('{model}', [EspecialidadController::class, 'destroy'])->name('especialidad.delete');
        });

        Route::prefix('especialistas')->group(function(){
            Route::get('', [EspecialistaController::class, 'index'])->name('especialista');
            Route::get('add', [EspecialistaController::class, 'add'])->name('especialista.add');
            Route::get('edit/{model}', [EspecialistaController::class, 'edit'])->name('especialista.edit');
            Route::post('', [EspecialistaController::class, 'store'])->name('especialista.store');
            Route::patch('{model}', [EspecialistaController::class, 'update'])->name('especialista.update');
            Route::delete('{model}', [EspecialistaController::class, 'destroy'])->name('especialista.delete');
        });

        Route::prefix('agendas')->group(function(){
            Route::get('', [AgendaController::class, 'index'])->name('agenda');
            Route::get('add', [AgendaController::class, 'add'])->name('agenda.add');
            Route::get('edit/{model}', [AgendaController::class, 'edit'])->name('agenda.edit');
            Route::post('', [AgendaController::class, 'store'])->name('agenda.store');
            Route::patch('{model}', [AgendaController::class, 'update'])->name('agenda.update');
            Route::delete('{model}', [AgendaController::class, 'destroy'])->name('agenda.delete');
        });
    });

    Route::prefix('app')->group(function(){
            Route::get('', [ReservaCitaController::class, 'index'])->name('reservacita');
            Route::get('add', [ReservaCitaController::class, 'add'])->name('reservacita.add');
            Route::get('edit/{model}', [ReservaCitaController::class, 'show'])->name('reservacita.edit');
            Route::post('', [ReservaCitaController::class, 'store'])->name('reservacita.store');
            Route::patch('{model}', [ReservaCitaController::class, 'update'])->name('reservacita.update');
            Route::delete('{model}', [AgendaController::class, 'destroy'])->name('reservacitas.delete');
    });

});

Route::middleware('auth')->group(function(){
    Route::prefix('api-app')->group(function(){
        Route::get('especialidad', [ApiAppsController::class, 'especialidades']);
        Route::get('especialista', [ApiAppsController::class, 'especialista']);
        Route::get('agenda', [ApiAppsController::class, 'agenda']);
        Route::get('reservacita', [ApiAppsController::class, 'reservacita']);
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
