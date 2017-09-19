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
Route::post('/books/update/{id}', 'BookController@update')->name('update');
Route::get('/books/delete/{id}', 'BookController@delete')->name('delete');
Route::match(['get', 'post'], 'album/post', 'AlbumController@uploadpic');
Route::post('album/post','AlbumController@uploadpic');
Route::get('/album', 'AlbumController@index');
Route::get('form','TestController@form');
Route::post('form/validate','TestController@validate');
Route::get('api/book/getJson','BookController@getBookJson' );
Route::get('/books/borrow', 'BookController@borrowBook');
Route::get('/testPage', 'HomeController@testPage');
Route::get('books/borrow/{idbooks?}', 'BookController@borrowBookById');
Route::get('news','NewsController@index');
Route::get('/home', 'HomeController@index')->name('home');


