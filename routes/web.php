<?php

use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\DashboardControllerOld;

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
    return view('home',[
        "title"=>"home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title"=>"about",
        "name"=>"asdhi",
        "email"=>"asdhibadi@gmail.com",  
    ]);
});

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::post('/simpan-buku/{id?}', [DashboardPostController::class,'store'])->name('simpan-buku')->middleware('auth');
Route::get('/delete-buku/{id}', [DashboardPostController::class,'destroy'])->name('delete-buku')->middleware('auth');
Route::get('/edit-buku/{id}', [DashboardPostController::class,'edit'])->name('edit-buku')->middleware('auth');
Route::post('/update-buku/{id}', [DashboardPostController::class,'update'])->name('update-buku')->middleware('auth');

Route::resource('/dashboard/buku', DashboardPostController::class)->middleware('auth');

