<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function() {
    //Admin Login Route
    Route::match(['get', 'post'],'login','App\Http\Controllers\Admin\AdminController@login');

    //Admin Dashboard Route
    Route::group(['middleware' => ['admin']], function(){
        //Admin Logout
        Route::get('logout', 'App\Http\Controllers\Admin\AdminController@logout');

        Route::get('dashboard', 'App\Http\Controllers\Admin\AdminController@index');
        Route::match(['get', 'post'], 'update-password', "App\Http\Controllers\Admin\AdminController@updatePassword");
    });
});

