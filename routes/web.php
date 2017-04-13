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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/albums', 'AlbumController@albums')->name('albums');
Route::get('details/{AlbumId}', 'AlbumController@details');
Route::post('/comment_store', 'CommentController@store')->name('comment.store');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/add_album', 'AdminController@create')->name('admin.addAlbum');
	Route::post('/album_store', 'AdminController@store')->name('album.store');
	

	Route::get('/edit_album/{AlbumId}', 'AdminController@edit')->name('album.edit');
	Route::post('/update_album/{AlbumId}', 'AdminController@update')->name('album.update');

	

});

