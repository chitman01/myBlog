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

Route::get('/index', 'HomeController@index')->name('index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nav', 'HomeController@nav')->name('nav');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
