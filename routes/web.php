<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AltaController;
use App\Http\Controllers\CompeticionController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\CrearcompeticionController;
use App\Http\Controllers\ApuntarseController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::match(['get', 'post'], '/', function () {
//     return view('index');
// });

Route::get('/', IndexController::class);

Route::match(['get', 'post'], '/alta_usuario.blade.php', function () {
    return view('alta_usuario');
});

// Route::get('alta_usuario', [AltaController::class, 'login']);

Route::get('alta', function () {
    return view('alta');
});

Route::get('logout', function () {
    return view('logout');
});

Route::get('horario', function () {
    return view('horario');
});
Route::get('horariocompeticion', function () {
    return view('horariocompeticion');
});

Route::get('principal', [ReservaController::class, 'login']);
Route::get('competiciones', CompeticionController::class);
Route::get('reserva', [ReservaController::class, 'reserva']);
Route::get('datos', DatosController::class);
Route::get('crearcompeticion', [CrearCompeticionController::class, 'inicio']);
Route::get('crear', [CrearCompeticionController::class, 'crear']);
Route::get('crear2', [CrearCompeticionController::class, 'crear2']);
Route::get('apuntarse', [ApuntarseController::class, 'apuntarse']);
Route::get('info', [InfoController::class, 'info']);
Route::get('admin', [AdminController::class, 'admin']);


// Route::get('principal', function () {
//     return view('principal');
// });

// Route::get('img/{filename}', [StorageFileController::class,'getPubliclyStorgeFile'])->name('img.displayImage');