<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard');



Route::group(['namespace'=>'admin'],function (){
    ########################begin about routes #####################################
    Route::get('/admin-about','AboutController@index')->name('admin.about');
    Route::get('/admin-about-create','AboutController@create')->name('admin.about.create');
    Route::post('/admin-about-store','AboutController@store')->name('admin.about.store');
    Route::get('/admin-about-edit/{id}','AboutController@edit')->name('admin.about.edit');
    Route::post('/admin-about-update/{id}','AboutController@update')->name('admin.about.update');
    Route::get('/admin-about-delete/{id}','AboutController@destroy')->name('admin.about.delete');
    ########################end about routes #####################################

    ########################begin experience routes #####################################
    Route::get('/admin-experience','ExperienceController@index')->name('admin.experience');
    Route::get('/admin-experience-create','ExperienceController@create')->name('admin.experience.create');
    Route::post('/admin-experience-store','ExperienceController@store')->name('admin.experience.store');
    Route::get('/admin-experience-edit/{id}','ExperienceController@edit')->name('admin.experience.edit');
    Route::post('/admin-experience-update/{id}','ExperienceController@update')->name('admin.experience.update');
    Route::get('/admin-experience-delete/{id}','ExperienceController@destroy')->name('admin.experience.delete');
    ########################end experience routes #####################################

    ########################begin education routes #####################################
    Route::get('/admin-education','EducationController@index')->name('admin.education');
    Route::get('/admin-education-create','EducationController@create')->name('admin.education.create');
    Route::post('/admin-education-store','EducationController@store')->name('admin.education.store');
    Route::get('/admin-education-edit/{id}','EducationController@edit')->name('admin.education.edit');
    Route::post('/admin-education-update/{id}','EducationController@update')->name('admin.education.update');
    Route::get('/admin-education-delete/{id}','EducationController@destroy')->name('admin.education.delete');
    ########################end education routes #####################################

    ########################begin interests routes #####################################
    Route::get('/admin-interests','InterestsController@index')->name('admin.interests');
    Route::get('/admin-interests-create','InterestsController@create')->name('admin.interests.create');
    Route::post('/admin-interests-store','InterestsController@store')->name('admin.interests.store');
    Route::get('/admin-interests-edit/{id}','InterestsController@edit')->name('admin.interests.edit');
    Route::post('/admin-interests-update/{id}','InterestsController@update')->name('admin.interests.update');
    Route::get('/admin-interests-delete/{id}','InterestsController@destroy')->name('admin.interests.delete');
    ########################end education routes #####################################

    ########################begin interests routes #####################################
    Route::get('/admin-awards','AwardsController@index')->name('admin.awards');
    Route::get('/admin-awards-create','AwardsController@create')->name('admin.awards.create');
    Route::post('/admin-awards-store','AwardsController@store')->name('admin.awards.store');
    Route::get('/admin-awards-edit/{id}','AwardsController@edit')->name('admin.awards.edit');
    Route::post('/admin-awards-update/{id}','AwardsController@update')->name('admin.awards.update');
    Route::get('/admin-awards-delete/{id}','AwardsController@destroy')->name('admin.awards.delete');
    ########################end education routes #####################################

});

