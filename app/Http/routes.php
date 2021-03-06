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

Route::get('/links', function () {
    return view('pages.home');
});

Route::get('/images',function(){
    return view('pages.images');
});

Route::get('/', 'LinkController@index');

Route::get('/api/links', 'LinkController@getLinks');

Route::get('/clearcache', function() {
   \Cache::flush();
    return "Cache Cleared";
});

Route::get('/videos',function(){
    return view('pages.videos');
});
