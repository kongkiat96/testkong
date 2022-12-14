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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])->group(function() {
    Route::get('home', 'HomeController@index');
    
    Route::prefix('table')->group(function (){
        Route::get('','Table\TableController@index');
    });

    Route::prefix('test')->group(function (){
        Route::get('','Test\KongkiatController@index');
    });
});
