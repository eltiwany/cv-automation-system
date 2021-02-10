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

Route::get('/project-research', function () {
    return view('projectandresearch');
});

Route::get('/work-experince', function () {
    return view('workexperience');
});

Route::get('/referees', function () {
    return view('referees');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/personal-information' ,'PersonalInformationsController');
Route::resource('/educational-background' ,'EducationalBackgroundsController');
Route::post('/project-research', "ProjectandResearchsController@store");
Route::post('/hobbies', "HobbiesController@store");
Route::post('/work-experince', "WorkExperiencesContoller@store");
Route::post('/upload-image', 'PersonalInformationsController@upload_image');
