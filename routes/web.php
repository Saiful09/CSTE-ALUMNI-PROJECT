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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Fronend routes
Route::get('/', 'FrontController@index');
//Route::get('/postjob', 'FrontController@postjob');
Route::get('/activity', 'FrontController@activity');
Route::get('/gallery', 'FrontController@gallery');
Route::get('/organization', 'FrontController@organization');
Route::get('/sign', 'FrontController@sign');
Route::get('/contact', 'FrontController@contact');
Route::post('/alumni-reg', 'FrontController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//backend routes
Route::get('/allalumni', 'BackendController@allalumni');
Route::get('/viewsingle/{id}', 'BackendController@viewsingle');
//postjob controller
Route::get('/postjob', 'PostjobController@postjob');
Route::post('/job', 'PostjobController@job');
Route::get('/seepost', 'PostjobController@seepost');