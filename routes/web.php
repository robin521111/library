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
Route::get('/portal', 'BookController@BookPre')->name('preview');
Route::get('/submit', 'BookController@submit');
Route::get('/books/edit/{idbooks}', 'BookController@edit');
Route::get('/books/delete/{id}', 'BookController@delete')->name('delete');
Route::post('/books/update/{id}', 'BookController@update')->name('update');
<<<<<<< HEAD
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
=======
>>>>>>> 17750bb7994fefdfec8e0af5ff24a99b28036c49

Route::get('/album', 'AlbumController@index');
Route::get('form','TestController@form');
Route::post('form/validate','TestController@validate');
Route::get('api/book/getJson','BookController@getBookJson' );
Route::get('/books/borrow', 'BookController@borrowBook');
Route::get('/testPage', 'HomeController@testPage');
Route::get('books/borrow/{idbooks?}', 'BookController@borrowBookById');