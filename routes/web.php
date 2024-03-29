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
Route::post('/listings', [ListingController::class, 'store']);
Route::get('/listings/{id}', [ListingController::class, 'show']);
