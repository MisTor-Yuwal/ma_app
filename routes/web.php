<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\JadeController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TempleController;
use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[PagesController::class,'home']);
Route::get('/detail/{id}',[PagesController::class,'details']);
Route::get('/show/{id}',[PagesController::class,'show']);
Route::get('/momentous',[PagesController::class,'momentous']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// backend
Route::resource('category', CategoryController::class);
Route::resource('student', StudentController::class);
Route::resource('temple', TempleController::class);
Route::resource('jade',JadeController::class);
Route::resource('event',EventController::class);