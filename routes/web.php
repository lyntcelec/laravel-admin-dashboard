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

Route::redirect('/', '/login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testmiddleware', 'HomeController@testmiddleware');

Route::get('/my_roles', 'ExamplesController@show_my_roles')->middleware('auth');

Route::resource('/post', 'PostsController');

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', ['as' => 'pages.profile', 'uses' => 'PageController@profile']);
});
