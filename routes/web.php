<?php

use App\Http\Controllers\alquranController;
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

Route::get('/', [alquranController::class,'show'])->name('index');
Route::get('/ayat/{nomor}', [alquranController::class, 'detailayat']);

