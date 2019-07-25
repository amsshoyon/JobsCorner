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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/candidates', 'HomeController@candidates')->name('candidates');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/get_job', 'HomeController@getJob')->name('get_job');
Route::get('/view_job/{id}', 'HomeController@JobDetails')->name('job.view_job');

Route::get('/post_job', 'JobController@PostJob')->name('job.post');
Route::get('/my_jobs', 'JobController@MyJobs')->name('job.my_jobs');
Route::get('/edit_job/{id}', 'JobController@edit')->name('job.edit_job');
Route::post('/job_store', 'JobController@store')->name('job.store');
Route::get('/job_edit/{id}', 'JobController@edit')->name('job.edit');
Route::put('/job_update/{id}', 'JobController@update')->name('job.update');
Route::delete('/job_delete/{id}', 'JobController@destroy')->name('job.destroy');

Route::get('/apply/{id}', 'ApplicationController@apply')->name('job.apply');

Route::post('/application', 'ApplicationController@store')->name('job.application');

Route::get('/profile', 'UserController@update')->name('user.update');
Route::post('/update_profile/{id}', 'UserController@update')->name('user.update');