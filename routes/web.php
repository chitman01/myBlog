<?php
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Users as UserResource;
use App\Http\Resources\UserCollection;

use App\User;
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

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', 'admin\AdminController@index')->name('dashboard');
    });
});

Route::get('profile','admin\AdminController@profile')->name('profile');

Route::get('/blog_destroy','BlogController@destroy')->name('blog_destroy');

Route::get('/main_blog','HomeController@main_blog');

Route::get('/search','userController@search');

Route::get('/search_blog','BlogController@search')->name('search_blog');


Route::get('/navigation_user','userController@navigation_user');

Route::get('/Pagination_blog','BlogController@Pagination_blog');

Route::POST('/check','HomeController@check')->name('check');

Route::get('/api_user', function () {
    $data = UserResource::collection(User::all()->keyBy->id);
    return $data;
});


Route::get('/api_users', function () {
    $data = new UserCollection(User::all());
    return $data;
});

Route::get('/index', 'HomeController@index')->name('index');

Route::get('/user', 'HomeController@user')->name('user');

Route::get('/view', 'HomeController@view')->name('view');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/nav', 'HomeController@nav');

Route::resource('blog', 'BlogController');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
