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

Route::get('/asset', function () {
    return view('asset');
});


////////Routes - PagesController//////////////////
Route::get('/', 'PagesController@userlogin');
Route::get('/election-archive', 'PagesController@archive');
Route::get('/edit-election', 'PagesController@editelection');
Route::get('/help', 'PagesController@help_a');
Route::get('/votenow', 'PagesController@votenow');
Route::get('/view-election', 'PagesController@VElection');
Route::get('/changepass', 'PagesController@changepass');
Route::get('/helpuser', 'PagesController@helpuser');
//Route::get('/dashboard', 'PagesController@dashboard');
//Route::get('/a/login','PagesController@adminlog');
Route::get('/home','PagesController@home');
Route::get('/result', 'PagesController@result');


/////Authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/////Admin///
Route::prefix('a')->group(function(){
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});

///////Routes - CRUD//////////////////////////////
Route::resource('/manage-students', 'StudentController');
Route::post('/csv_import', 'StudentController@csv_import')->name('import');
Route::resource('/manage-courses', 'CourseController');
Route::resource('/manage-positions', 'PositionController');
//Route::delete('/manage-positions', 'PositionController@destroy')->name('delPos');
Route::delete('positions', ['as'=>'delPos', 'uses'=>'PositionController@destroy']);

Route::resource('/manage-partylists', 'PartyController');
Route::resource('/manage-org', 'OrgsController');
Route::resource('/create-election', 'ElectionController');
Route::get('/create-election-step2', 'ElectionController@step2');
Route::get('/create-election-step3', 'ElectionController@step3');