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

Route::get('/register', 'AuthController@RegistrationForm')->name('register');
Route::post('/register', 'AuthController@RegistrationProcess')->name('register');

Route::get('/login', 'AuthController@LoginForm')->name('login');
Route::post('/login', 'AuthController@LoginProcess')-> name('login');

Route::group(['middleware' => 'auth'], function (){

    Route::get('/index','AdminController@index')->name('index');

    Route::get('/logout', 'AuthController@logout')->name('logout');

    Route::get('/profile','UserController@userProfile')->name('profile');


    Route::get('/update','UserController@profileUpdate')->name('profileUpdate');
    Route::post('/updateprofile','UserController@processUpdate')->name('processUpdate');


    Route::group(['middleware' => 'admin'], function (){

        Route::get('/addsubject','AdminController@addSubjectform')->name('addSubject');
        Route::post('/addsubject','AdminController@processSubjectform');


        Route::get('/addtime','AdminController@addTime')->name('time');
        Route::post('/addtime','AdminController@processTime');

        Route::get('/routine','AdminController@addRoutine')->name('schedule');
        Route::post('/routine','AdminController@processRoutine');

    });



});



