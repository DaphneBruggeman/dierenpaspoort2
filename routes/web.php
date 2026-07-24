<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DierenController;

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

Route::get('/dieren', [DierenController::class, 'index']);

Route::get('/dieren/nieuw', [DierenController::class, 'create']);
Route::post('/dieren', [DierenController::class, 'store']);

Route::get('/dieren/{animal}', [DierenController::class, 'show']);
