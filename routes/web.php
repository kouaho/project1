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

Route::match(['get','post'],'/admin','AdminController@index');
Route::get('/admin/home','AdminController@admin');

Route::match(['get','post'],'/','AdministrationController@index')->name('connexion');
Route::get('/administration','AdministrationController@admin')->name('home-admin');
Route::post('/admin/login','Auth\LoginController@adminLogin')->name('admin-login');
Route::resource('/administration/bug','BugController');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::match(['get','post'],'/admin','AdminController@index');
Route::get('/admin/home','AdminController@admin');

Route::match(['get','post'],'/','AdministrationController@index')->name('connexion');
Route::get('/administration','AdministrationController@admin')->name('home-admin');
Route::post('/admin/login','Auth\LoginController@adminLogin')->name('admin-login');
Route::resource('/administration/bug','BugController');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::match(['get','post'],'/admin','AdminController@index');
Route::get('/admin/home','AdminController@admin');

Route::match(['get','post'],'/','AdministrationController@index')->name('connexion');
Route::get('/administration','AdministrationController@admin')->name('home-admin');
Route::post('/admin/login','Auth\LoginController@adminLogin')->name('admin-login');
Route::resource('/administration/bug','BugController');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');




//domain route
Route::resource('admin/domains','DomainController');
Route::resource('admin/role','AdminRoleController');
//parametre route
Route::resource('admin/parametre','AdminParametreController');
Route::fallback(function() {
   return view('404'); // la vue 57 33 72 90 
});

//admin users route
Route::resource('admin/users','UserController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
