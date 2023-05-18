<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\HeadingsController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\AuthController;

Route::get('/', function () { return view('guest.index'); });

Route::get('/news', [GuestController::class, 'news'] );
Route::get('/onenews/{news}', [GuestController::class, 'oneNews'] );
Route::get('/brands', [GuestController::class, 'brands'] );
Route::get('/brand/{brand}', [GuestController::class, 'brand'] );
Route::get('/search', [GuestController::class, 'search'] );

Route::get('/login', function () { return view('admin.login'); });
Route::post('/login', [AuthController::class, 'login'] );
Route::get('/logout', [AuthController::class, 'logout'] );

Route::group(['middleware' => ['auth']], function(){

    Route::get('/cabinet/news', [NewsController::class, 'index'] );
    Route::get('/cabinet/news/add', [NewsController::class, 'edit'] );
    Route::get('/cabinet/news/edit/{news}', [NewsController::class, 'edit'] );
    Route::post('/cabinet/news/0', [NewsController::class, 'create'] );
    Route::post('/cabinet/news/{news}', [NewsController::class, 'update'] );
    Route::get('/cabinet/news/delete/{news}', [NewsController::class, 'delete'] );

    Route::middleware('manager')->group(function() {

        Route::get('/cabinet/brands', [BrandsController::class, 'index'] );
        Route::get('/cabinet/brands/add', [BrandsController::class, 'edit'] );
        Route::get('/cabinet/brands/edit/{brand}', [BrandsController::class, 'edit'] );
        Route::post('/cabinet/brands/0', [BrandsController::class, 'create'] );
        Route::post('/cabinet/brands/{brand}', [BrandsController::class, 'update'] );
        Route::get('/cabinet/brands/delete/{brand}', [BrandsController::class, 'delete'] );

        Route::get('/cabinet/users', [UsersController::class, 'index'] );
        Route::get('/cabinet/users/add', [UsersController::class, 'edit'] );
        Route::get('/cabinet/users/edit/{user}', [UsersController::class, 'edit'] );
        Route::post('/cabinet/users/0', [UsersController::class, 'create'] );
        Route::post('/cabinet/users/{user}', [UsersController::class, 'update'] );
        Route::get('/cabinet/users/delete/{user}', [UsersController::class, 'delete'] );

    });

    Route::get('/cabinet/settings', function () { return view('admin.settings'); });
    Route::post('/cabinet/settings/{user}', [AuthController::class, 'settings'] );

});