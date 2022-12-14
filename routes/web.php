<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portfolio\PortfolioController;
use App\Http\Controllers\Index\IndexController;

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

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio');
