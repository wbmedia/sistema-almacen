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

// Base Routes
Route::get('/', function () {
    return view('auth.login')->with(['title' => 'Login Session', 'active' => 'login']);
});
Auth::routes();

Route::get('/logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'auth.logout']);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', ['as' => 'admin.index', function () {
        return view('admin.index')
            ->with(['title' => 'Panel de Administración', 'active' => 'home']);
    }]);
});
