<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/about', function(){
  return view('/about');
});

//test admin route
Route::get('/admin/',function(){
  return view('admin.index');
});

//Route Group
Route::group(['middleware'=>'admin'], function(){
  //admin routes - used resource
  Route::resource('admin/users', 'AdminUsersController');
  Route::resource('admin/posts','AdminPostsController' );
  Route::resource('admin/categories', 'AdminCategoriesController');
});
