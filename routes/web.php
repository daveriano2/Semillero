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
use App\Http\Controllers\BuroController;
use App\Http\Controllers\NizaController;
use App\Http\Controllers\PuertaController;
use App\Http\Controllers\BuroItaguiController;
use App\Http\Controllers\CeohController;
use App\Http\Controllers\SecaController;
use App\Http\Controllers\MonteriaController;
use App\Http\Controllers\ExtraController;

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
    Route::resource('buro', BuroController::class);
    Route::resource('niza', NizaController::class);
    Route::resource('puerta', PuertaController::class);
    Route::resource('puerto', SecaController::class);
    Route::resource('ceoh', CeohController::class);
    Route::resource('itagui', BuroItaguiController::class);
    Route::resource('monteria', MonteriaController::class);
    Route::resource('extras', ExtraController::class);

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
