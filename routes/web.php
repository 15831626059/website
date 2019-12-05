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

use App\Foundation\Regexp;

Route::group(
    [
        'as' => 'web::',
    ],
    function () {
        Route::get('/', 'HomeController@index');
        Route::get('/enter', 'HomeController@enter');
        Route::get('/article', 'HomeController@article');
        Route::get('/article/{id}', 'HomeController@detail');
        Route::get('/contact', 'HomeController@contact');
        Route::get('/service', 'HomeController@service');
        Route::get('/faq', 'HomeController@faq');
        Route::get('/xuqiu', 'HomeController@xuqiu');

        Route::get('/mobile', 'HomeController@mindex');
        Route::get('/mobile/enter', 'HomeController@menter');
        Route::get('/mobile/article', 'HomeController@marticle');
        Route::get('/mobile/article/{id}', 'HomeController@mdetail');
        Route::get('/mobile/about', 'HomeController@about');
        Route::get('/mobile/service', 'HomeController@mservice');
    }
);
