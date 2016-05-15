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

//新しい記事の作成画面
Route::get('/new_blog', function(){
    return view('new_blog');
});

//記事の投稿
Route::post('/new_blog', 'BlogsController@postArticle');

//記事詳細画面
Route::get('/{id}', 'BlogsController@articleDetail');
