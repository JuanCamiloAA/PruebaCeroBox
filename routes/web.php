<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Models\Client;
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
    $clientes = Client::all();
    return view('welcome', compact('clientes'));
});

Auth::routes();


Route::resources([
    'client' => ClientController::class,
    'service' => ServiceController::class,
    'schedule' => ScheduleController::class,
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('changeStateClient/{id}/{state}', [ClientController::class, 'ChangeState'])->name('changeStateClient');
Route::get('changeStateService/{id}/{state}', [ServiceController::class, 'ChangeState'])->name('changeStateService');
Route::get('inicio/{id}', [InicioController::class, 'detalle'])->name('Inicio');
