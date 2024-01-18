<?php

use App\Http\Controllers\web\MovimentacaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\PJController;
use App\Http\Controllers\web\TablesController;
use App\Http\Controllers\web\OrcController;
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
    return view('index');
});

Route::resource('/pj', PJController::class);
Route::resource('/tb', TablesController::class);
Route::resource('/orc', OrcController::class);
Route::resource('/extrato', MovimentacaoController::class);