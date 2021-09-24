<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\SteakController;
use App\Http\Controllers\TitreController;
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
    return view('pages.main');
});

Route::get('/backoffice',[BackController::class, 'index'])->middleware(['auth', 'admin'])->name('hombo');

Route::resource('/titres', TitreController::class)->middleware(['auth', 'admin']);
Route::resource('/headers', HeaderController::class)->middleware(['auth', 'admin']);
Route::resource('/abouts', AboutController::class)->middleware(['auth', 'admin']);
Route::resource('/steaks', SteakController::class)->middleware(['auth', 'admin']);
Route::resource('/chefs', ChefController::class)->middleware(['auth', 'admin']);
Route::resource('/customers', CustomerController::class)->middleware(['auth', 'admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
