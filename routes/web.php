<?php

use App\Http\Controllers\ListingController;
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
    return view('welcome');
});
Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/new', [ListingController::class, 'create']);
Route::post('/listings', [ListingController::class, 'store'])->name('listings.store');
Route::get('/listings/{id}/show', [ListingController::class, 'show']);
Route::get('/listings/{id}/edit', [ListingController::class,'edit']);
Route::post('/listings/{id}/update', [ListingController::class, 'update'])->name('listings.update');
