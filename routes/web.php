<?php

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','BlogController@Index');

Route::get('/login','BlogController@Login');

Route::get('/post','BlogController@post');

Route::post('insert_post','BlogController@Insert_post');

Route::get('/category','BlogController@Category');

Route::post('insert_category','BlogController@Insert_category');

Route::get('/post_details','BlogController@Details');

Route::get('delete-post/{id}','BlogController@DeletePost');

Route::get('post_details/{id}','BlogController@PostDetails');

Route::get('edit-post/{id}','BlogController@EditPost');

Route::post('update_post/{id}','BlogController@UpdatePost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
