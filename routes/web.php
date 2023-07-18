<?php

use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgregarController;
use App\Http\Controllers\DetalleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/', ItemsController::class)->names('welcome');

Route::resource('/item', AgregarController::class)->names('item');

Route::resource('/detalle', DetalleController::class)->names('detalle');



