<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/{slug?}', function () {
})->where('slug', '[A-Za-z0-9\-]+');

Route::get('year/{year}', function () {
})->where('year', '^(13[0-9]\d|14[0-9]\d)$');

Route::get('admin/dashboard', function () {
})->middleware('admin');

Route::resource('admin/users', UserController::class)->middleware('admin');

Route::fallback(function() {
    return response()->view('errors.404', [], 404);
});
