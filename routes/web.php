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

//Route::get('/', function () {
//    return view('authenticate.login');
//});
//
//Auth::routes();

Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/postLogin', [App\Http\Controllers\LoginController::class, 'postLogin'])->name('processLogin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'postLogin'])->name('processLogin');

Route::get('/dashboard', function () {
    return view('dashboard.admin');
});

//Route for Package
Route::group(['prefix' => 'efris/packages-type'], function () {
    Route::get('view', [App\Http\Controllers\PackageTypeController::class, 'index']);
    Route::post('store',[App\Http\Controllers\PackageTypeController::class, 'store']);

});

//Route for Package
Route::group(['prefix' => 'efris/package'], function () {
    Route::get('view', [App\Http\Controllers\PackageController::class, 'index']);
    Route::get('create', [App\Http\Controllers\PackageController::class, 'create']);
    Route::post('store',[App\Http\Controllers\PackageController::class, 'store']);
});
