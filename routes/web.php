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

    Route::group(['middleware' => 'admin'], function(){
        Route::resource('users', 'UsersController');
        Route::resource('clients', 'ClientsController');
        Route::get('users/{user}/destroy', ['uses' => 'UsersController@destroy', 'as' => 'users.destroy']);
    });

    Route::resource('locations', 'LocationsController');
    Route::get('locations/{location}/destroy', ['uses' => 'LocationsController@destroy', 'as' => 'locations.destroy']);

    Route::resource('categoriesAct', 'CategoriesActivesController');
    Route::get('categoriesAct/{categoryAct}/destroy', ['uses' => 'CategoriesActivesController@destroy', 'as' => 'categoriesAct.destroy']);

    Route::resource('actives', 'ActivesController');
    Route::get('actives/{active}/destroy', ['uses' => 'ActivesController@destroy', 'as' => 'actives.destroy']);

    Route::resource('historyActives', 'HistoryActivesController');
    Route::get('historyActives/{historyActive}/destroy', ['uses' => 'HistoryActivesController@destroy', 'as' => 'historyActives.destroy']);

    Route::resource('jobs', 'JobsController');
    Route::get('jobs/{job}/destroy', ['uses' => 'JobsController@destroy', 'as' => 'jobs.destroy']);

    Route::get('jobsActives/{job}', ['uses' => 'JobsController@assign', 'as' => 'jobs.assign']);
    Route::post('jobsActives/{job}', ['uses' => 'JobsController@assign', 'as' => 'jobs.assign']);

    Route::resource('outputs', 'OutputsController');
    Route::get('outputs/{output}/destroy', ['uses' => 'OutputsController@destroy', 'as' => 'outputs.destroy']);
    Route::get('printOutput/{output}', ['uses' => 'OutputsController@printOutput', 'as' => 'outputs.print']);

    Route::group(['prefix' => 'reports'], function(){
        Route::get('actives', ['uses' => 'ReportsController@actives', 'as' => 'reports.actives']);
        Route::get('historyActives', ['uses' => 'ReportsController@historyActives', 'as' => 'reports.history']);
        Route::get('outputs', ['uses' => 'ReportsController@outputs', 'as' => 'reports.outputs']);
        Route::post('export', ['uses' => 'ReportsController@export', 'as' => 'reports.export']);
    });

});
