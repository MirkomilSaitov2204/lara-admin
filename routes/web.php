<?php

use Illuminate\Support\Facades\Route;
//use Mcamara\LaravelLocalization\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Check Logs with today's Date
|--------------------------------------------------------------------------
|
| This is Laravel package that is named laravel log file with today's date!
| It will be useful packages and you can easily define all log files!
|
*/
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

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
//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ], function(){ //...
//});
Route::get('/', function () {
    return view('welcome');
});
