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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Registration routes
Route::get('/logincustom','LoginController@create_buttons')->name('logincustom');
Route::get('/registercustom','RegisterController@create_buttons')->name('registercustom');
Route::get('/jobseekerregister','RegisterController@create_job_seeker')->name('displayformjobseeker');
Route::get('/jobproviderregister','RegisterController@create_job_provider')->name('displayformjobprovider');
Route::post('/jobproviderregister','RegisterController@register_job_provider')->name('registerjobprovider');
Route::post('/jobseekerregister','RegisterController@register_job_seeker')->name('registerjobseeker');


//Jobseeker routes
Route::get('/jobseekerlogin', 'Auth\JobSeekerLoginController@showLoginForm')->name('jobseekerlogin');
Route::post('/jobseekerlogin', 'Auth\JobSeekerLoginController@login')->name('jobseekerlogin.submit');
Route::get('/jobseeker', 'JobSeekerController@index')->name('jobseeker.dashboard');
Route::get('/jobseekerlogout','Auth\JobSeekerLoginController@logout')->name('jobseeker.logout');
Route::get('/apply/{id}/{provider_id}/','ApplicationsController@apply')->name('apply');


//Jobprovider routes
Route::get('/jobproviderlogin', 'Auth\JobProviderLoginController@showLoginForm')->name('jobproviderlogin');
Route::post('/jobproviderlogin', 'Auth\JobProviderLoginController@login')->name('jobproviderlogin.submit');
Route::get('/jobprovider', 'JobProviderController@index')->name('jobprovider.dashboard');
Route::get('/jobproviderlogout','Auth\JobProviderLoginController@logout')->name('jobprovider.logout');
Route::get('/viewapplications','JobProviderController@viewapplications')->name('viewapplications');
Route::get('/postjobs', 'JobsController@post_jobs')->name('postjobs');
Route::post('/createnewjob', 'JobsController@create_job')->name('createnewjob');
Route::get('/delete/{id}/','JobsController@delete')->name('deletejob');


//Password resets jobseeker
Route::post('/jobseeker/password/email','Auth\JobSeekerForgotPasswordController@sendResetLinkEmail')->name('jobseeker.password.email');
Route::get('/jobseekerpasswordreset','Auth\JobSeekerForgotPasswordController@showLinkRequestForm')->name('jobseeker.password.request');
Route::post('/jobseekerpasswordreset','Auth\JobSeekerResetPasswordController@reset');
Route::get('/jobseekerpasswordreset{token}','Auth\JobSeekerResetPasswordController@showResetForm')->name('jobseeker.password.reset');



//password resets job provider
Route::post('/jobprovider/password/email','Auth\JobProviderForgotPasswordController@sendResetLinkEmail')->name('jobprovider.password.email');
Route::get('/jobproviderpasswordreset','Auth\JobProviderForgotPasswordController@showLinkRequestForm')->name('jobprovider.password.request');
Route::post('/jobproviderpasswordreset','Auth\JobProviderResetPasswordController@reset');
Route::get('/jobproviderpasswordreset{token}','Auth\JobProviderResetPasswordController@showResetForm')->name('jobprovider.password.reset');


//message
Route::post('/sendquery','MessagesController@submit');