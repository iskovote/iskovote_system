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


////////Routes - PagesController//////////////////
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/create-election', 'PagesController@createelection');
Route::get('/view-election', 'PagesController@viewelection');

///////Routes - CRUD//////////////////////////////


Route::resource('/manage-students', 'StudentController');
Route::resource('/manage-positions', 'PositionController');
Route::resource('/manage-partylists', 'PartyController');
Route::resource('/manage-courses', 'CourseController');