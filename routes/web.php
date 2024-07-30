<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\MyInvokableController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;


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


Route::get('/page', [SampleController::class, 'page'])->name('page');
Route::get('/invoke-example', MyInvokableController::class);
Route::resource('posts', PostController::class);

Route::resource('cars', CarController::class);
Route::resource('brands', BrandController::class);

