<?php

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

Route::get('/', [App\Http\Controllers\CompactController::class, 'index']);



Route::get('/news', function(){
    return view('news');
});

Route::get('/projects', function(){
    return view('projects');
});

Route::middleware(['role:admin'])->prefix('adminn')->group(function(){
    
    Route::get('/admin', function(){
        return view('admin');
    });

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.index');
    Route::resource('news', \Admin\NewsController::class);
    Route::resource('projects', \Admin\ProjectsController::class);
    Route::resource('custom_users', \Admin\CustomUserController::class);

});

Route::post('/', [App\Http\Controllers\CustomUserController::class, 'submit']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

