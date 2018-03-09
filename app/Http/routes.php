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
Route::get('/test/{id?}',function ($id){
    return 'test'.$id;
});
Route::get('/a/{catid}',function ($catid){
    return $catid;
});
Route::get('/index','IndexController@index');

//Route::get('/admin/index','admin\IndexController@index');

Route::group(['prefix' => 'admin','namespace' => 'admin'],function (){
    Route::get('/index','IndexController@index');
    Route::get('/login','IndexController@login');
    Route::resource('article','ArticleController');
});


