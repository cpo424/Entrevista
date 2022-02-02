<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navesController;
use App\Http\Controllers\pilotosController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('app');
});

/*Route::get('/naves', function () {
    return view('naves.index');
})->name('naves');*/
Route::get('/naves', [navesController::class, 'index'])->name('naves');
Route::post('/naves', [navesController::class, 'store'])->name('naves');
Route::get('/naves/{id}', [navesController::class, 'show'])->name('naves-edit');
Route::patch('/naves/{id}', [navesController::class, 'update'])->name('naves-update');
Route::delete('/naves/{id}', [navesController::class, 'destroy'])->name('naves-destroy');

Route::resource('piloto', pilotosController::class);