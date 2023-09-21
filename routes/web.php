<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'App\Http\Controllers\Admin\Main\IndexController')->name('admin.main.index');
    Route::group(['prefix' => 'categories'], function ()
    {
        Route::get('/', 'App\Http\Controllers\Categories\IndexController')->name('categories.index');
        Route::get('/create','App\Http\Controllers\Categories\CreateController')->name('categories.create');
        Route::post('/','App\Http\Controllers\Categories\StoreController')->name('categories.store');
        Route::get('/{category}','App\Http\Controllers\Categories\ShowController')->name('categories.show');
        Route::get('/{category}/edit','App\Http\Controllers\Categories\EditController')->name('categories.edit');
        Route::patch('/{category}','App\Http\Controllers\Categories\UpdateController')->name('categories.update');
        Route::delete('/{category}','App\Http\Controllers\Categories\DestroyController')->name('categories.delete');
    });
});
