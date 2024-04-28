<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
  \DB::listen(function ($query) {
      $query->sql;           //вывод sql запросов
      $query->bindings;  //привязки запросов
      $query->time;         // время выполнения запросов
    });
 Route::get('/', [AirController::class, 'index']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::any('search', [AirController::class, 'search']);
