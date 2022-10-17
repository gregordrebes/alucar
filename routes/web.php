<?php

use App\Http\Controllers\NavegadorController;
use App\Http\Controllers\NavigadorController;
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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[NavegadorController::class, 'home'])->name('home');

Route::get('/agencia',[NavegadorController::class, 'agencia'])->name('agencia');

//Route::get('/registerAgency', [RegisteredAgencyController::class, 'create'])->name('registerAgency');

//Route::post('registerAgency', [RegistredAgencyController::class, 'store'])->name('registerAgency');

Route::get('registerAgency', [NavegadorController::class, 'create'])->name('registerAgency');

Route::post('registerAgency', [NavegadorController::class, 'store']);