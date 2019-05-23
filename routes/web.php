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

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/manage-students', 'PagesController@managestudents');
Route::get('/manage-positions', 'PagesController@managepositions');
Route::get('/manage-courses', 'PagesController@managecourses');
Route::get('/manage-partylists', 'PagesController@managepartylists');

Route::get('/create-election', 'PagesController@createelection');
Route::get('/view-election', 'PagesController@viewelection');
