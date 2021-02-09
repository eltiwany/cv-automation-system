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

Route::get('/hobbies', function () {
    return view('hobbies');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/personal-information' ,'PersonalInformationsController');
Route::resource('/educational-background' ,'EducationalBackgroundsController');
<<<<<<< HEAD
Route::post('/hobbies', "HobbiesController@store");
=======
Route::post('/upload-image', 'PersonalInformationsController@upload_image');
>>>>>>> 3ffefc5da34062ea3d09f2bf54008fbe496b11b7
