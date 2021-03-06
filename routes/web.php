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




Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('categories', 'categorieController');

Route::resource('comments', 'commentController');

Route::resource('courses', 'courseController');

Route::resource('items', 'itemController');

Route::resource('courseUsers', 'CourseUserController');

Route::resource('payments', 'PaymentController');

Route::resource('users', 'userController');

Route::resource('views', 'viewController');

Route::resource('roles', 'roleController');