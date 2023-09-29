<?php

use Illuminate\Support\Facades\Route;


define('PAGINATION_COUNT',10);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

################# start front routes##########################
Route::get('/', 'FrontController@index')->name('about');
Route::get('/experience', 'FrontController@experience')->name('experience');
Route::get('/education', 'FrontController@education')->name('education');
Route::get('/skills', 'FrontController@skills')->name('skills');
Route::get('/interests', 'FrontController@interests')->name('interests');
Route::get('/awards', 'FrontController@awards')->name('awards');
################# end front routes##########################
