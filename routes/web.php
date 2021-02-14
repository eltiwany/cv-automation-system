<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//Route::get('/personal-information', function () {
    //return view('/user-information/personal-information');
//});
Route::get('/educational-background', function () {
    return view('/EducationBackground');
});
Route::get('/language', function () {
    return view('/language');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/referees' ,'RefereesController');
Route::resource('/hobbies', "HobbiesController");
Route::get('/personal-information', 'PersonalInformationsController@create')->name('personal-information');
Route::post('/educational-background','EducationBackgroundsController@store');
Route::post('user-information/personal-information/store','PersonalInformationsController@store')->name('personal-information');
Route::post('/language','LangauagesController@store');
Route::resource('/personal-informations' ,'PersonalInformationsController');
Route::resource('/education-backgrounds' ,'EducationBackgroundsController');
Route::resource('/referees' ,'RefereesController');
Route::resource('/hobbies', "HobbiesController");
Route::resource('/work-experiences', "WorkExperiencesController");
Route::post('/upload-image', 'PersonalInformationsController@upload_image');
