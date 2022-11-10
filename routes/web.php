<?php

use Illuminate\Support\Facades\Route;

//agregamos los controladores

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\IngresoController;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>['auth']],function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);
    Route::resource('ciudads',CiudadController::class);
    Route::resource('sedes',SedeController::class);
    Route::resource('turnos',TurnoController::class);
    Route::resource('horarios',HorarioController::class);
    Route::resource('ingresos', IngresoController::class);

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
