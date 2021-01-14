<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SeachController;
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
Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/user/post', [PostController::class, 'store' ]);
Route::get('post/like/{id}', [RestaurantController::class, 'like' ]);
Route::get('/user/restaurants', [RestaurantController::class, 'index' ])->name('restaurants');
Route::get('/user/restaurant-add', [RestaurantController::class, 'create' ]);
Route::post('/user/save-restaurant', [RestaurantController::class, 'store' ]);
Route::post('search', [SeachController::class, 'index']);
