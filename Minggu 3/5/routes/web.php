<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;

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
    return view('cast/create');
});*/


Route::get('/', [CastController::class, 'index']);

Route::get('/cast/create', [CastController::class, 'create']);

Route::post('/cast', [CastController::class, 'store']);

Route::get('/cast/show/{id}', [CastController::class, 'show']);

Route::get('/cast/edit/{id}', [CastController::class, 'edit']);

Route::put('/cast/{id}', [CastController::class, 'update']);

Route::get('/cast/delete/{id}', [CastController::class, 'destroy']);