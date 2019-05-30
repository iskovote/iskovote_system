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

Route::get('/asset', function () {
    return view('asset');
});


//Routes - PagesController
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/create-election', 'PagesController@createelection');
Route::get('/view-election', 'PagesController@viewelection');

//Routes - CRUD
Route::get('/manage-students', 'StudentController@index');
Route::post('/studentadd', 'StudentController@store');
Route::get('/manage-positions', 'PositionController@index');
Route::post('/positionadd', 'PositionController@store');
Route::get('/manage-courses', 'CourseController@index');
Route::post('/coursesadd', 'CourseController@store');
Route::get('/manage-partylists', 'PartyController@index');
Route::post('/partyadd', 'PartyController@store');