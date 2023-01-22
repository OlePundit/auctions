<?php

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
Auth::routes();
Route::get('/', [App\Http\Controllers\AuctionsController::class, 'index']);

Route::get('/garage/{user}', [App\Http\Controllers\GarageController::class, 'index'])->name('Garage.show');
Route::get('/garage/{user}/edit', [App\Http\Controllers\GarageController::class, 'edit'])->name('Garage.edit');
Route::patch('/garage/{user}', [App\Http\Controllers\GarageController::class, 'update'])->name('Garage.update');
Route::get('/auctions/{slug}', [App\Http\Controllers\AuctionsController:: class, 'show']);

Route::post('/bid', [App\Http\Controllers\BidsController::class, 'store']);




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
