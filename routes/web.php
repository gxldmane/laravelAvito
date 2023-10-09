<?php

use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => 'web'], function () {
    Auth::routes(); // Генерация маршрутов для аутентификации
    // Другие маршруты вашего приложения
});
Route::get('/', 'App\Http\Controllers\Site\Main\IndexController')->name('site.index');
Route::get('/product/{product}', 'App\Http\Controllers\Site\Product\ShowController')->name('product.show');
Route::get('/seller/{seller}', 'App\Http\Controllers\Site\Seller\ShowController')->name('seller.show');
Route::post('/seller/{seller}/sendMessage', 'App\Http\Controllers\Site\Seller\SendMessageController')->name('seller.sendMessage');
Route::get('/profile', 'App\Http\Controllers\Site\Profile\IndexController')->name('profile.index');

Route::get('/profile/edit', 'App\Http\Controllers\Site\Profile\EditController')->name('profile.edit');
Route::patch('/profile', 'App\Http\Controllers\Site\Profile\UpdateController')->name('profile.update');

Route::get('/profile/create', 'App\Http\Controllers\Site\Product\CreateController')->name('product.create');
Route::post('/profile/create', 'App\Http\Controllers\Site\Product\StoreController')->name('product.store');




Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');


Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register.post');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'App\Http\Controllers\Admin\Main\IndexController')->name('admin.main.index');
    Route::group(['prefix' => 'categories'], function ()
    {
        Route::get('/', 'App\Http\Controllers\Admin\Category\IndexController')->name('categories.index');
        Route::get('/create','App\Http\Controllers\Admin\Category\CreateController')->name('categories.create');
        Route::post('/','App\Http\Controllers\Admin\Category\StoreController')->name('categories.store');
        Route::get('/{category}','App\Http\Controllers\Admin\Category\ShowController')->name('categories.show');
        Route::get('/{category}/edit','App\Http\Controllers\Admin\Category\EditController')->name('categories.edit');
        Route::patch('/{category}','App\Http\Controllers\Admin\Category\UpdateController')->name('categories.update');
        Route::delete('/{category}','App\Http\Controllers\Admin\Category\DestroyController')->name('categories.delete');
    });
    Route::group(['prefix' => 'cities'], function ()
    {
        Route::get('/', 'App\Http\Controllers\Admin\City\IndexController')->name('cities.index');
        Route::get('/create','App\Http\Controllers\Admin\City\CreateController')->name('cities.create');
        Route::post('/','App\Http\Controllers\Admin\City\StoreController')->name('cities.store');
        Route::get('/{city}','App\Http\Controllers\Admin\City\ShowController')->name('cities.show');
        Route::get('/{city}/edit','App\Http\Controllers\Admin\City\EditController')->name('cities.edit');
        Route::patch('/{city}','App\Http\Controllers\Admin\City\UpdateController')->name('cities.update');
        Route::delete('/{city}','App\Http\Controllers\Admin\City\DestroyController')->name('cities.delete');
    });
    Route::group(['prefix' => 'ads'], function ()
    {
        Route::get('/', 'App\Http\Controllers\Admin\Ad\IndexController')->name('ads.index');
        Route::get('/create','App\Http\Controllers\Admin\Ad\CreateController')->name('ads.create');
        Route::post('/','App\Http\Controllers\Admin\Ad\StoreController')->name('ads.store');
        Route::get('/{ad}','App\Http\Controllers\Admin\Ad\ShowController')->name('ads.show');
        Route::get('/{ad}/edit','App\Http\Controllers\Admin\Ad\EditController')->name('ads.edit');
        Route::patch('/{ad}','App\Http\Controllers\Admin\Ad\UpdateController')->name('ads.update');
        Route::delete('/{ad}','App\Http\Controllers\Admin\Ad\DestroyController')->name('ads.delete');
    });
    Route::group(['prefix' => 'users'], function ()
    {
        Route::get('/', 'App\Http\Controllers\Admin\User\IndexController')->name('users.index');
        Route::get('/create','App\Http\Controllers\Admin\User\CreateController')->name('users.create');
        Route::post('/','App\Http\Controllers\Admin\User\StoreController')->name('users.store');
        Route::get('/{user}','App\Http\Controllers\Admin\User\ShowController')->name('users.show');
        Route::get('/{user}/edit','App\Http\Controllers\Admin\User\EditController')->name('users.edit');
        Route::patch('/{user}','App\Http\Controllers\Admin\User\UpdateController')->name('users.update');
        Route::delete('/{user}','App\Http\Controllers\Admin\User\DestroyController')->name('users.delete');
    });
});

