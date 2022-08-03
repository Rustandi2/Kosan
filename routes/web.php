<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Masterdata\ProvinsiController;

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

// Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::prefix('/provinsi')->group(function() {
    Route::get('/', [App\Http\Controllers\Masterdata\ProvinsiController::class, 'index'])->name('provinsi');
    Route::get('/create', [App\Http\Controllers\Masterdata\ProvinsiController::class, 'create'])-> name('referensi.provinsi.create');
    Route::post('/store', [App\Http\Controllers\Masterdata\ProvinsiController::class, 'store'])-> name('referensi.provinsi.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Masterdata\ProvinsiController::class, 'edit'])-> name('referensi.provinsi.edit');
    Route::patch('/update/{id}', [App\Http\Controllers\Masterdata\ProvinsiController::class, 'update'])-> name('referensi.provinsi.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Masterdata\ProvinsiController::class, 'destroy'])-> name('referensi.provinsi.destroy');
});


