<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
    'uses'=>'UserController@getIndex',
    'as'=>'home'
]);

Route::post('GetDoctors',function(){
    return "hello";
});

Route::post('/getDoctors', [
    'uses'=>'UserController@getDoctors',
    'as'=>'getDoctors'
]);
Route::post('available-slot', [
    'uses'=>'UserController@availableSlot',
    'as'=>'available-slot'
]);
Route::post('post-appointment', [
    'uses'=>'UserController@postAppointment',
    'as'=>'post-appointment'
]);
Route::post('/userSignIn', [
	'uses' => 'UserController@userSignIn',
	'as' => 'userSignIn'
]);
Route::get('/login', function(){
	return view('admin.login');
})->name('login');

Route::get('/adminIndex', [
	'uses' => 'UserController@adminIndex',
	'middleware' => 'auth',
	'as' => 'adminIndex'
]);

Route::get('/deleteAppointmentRow/{id}',[
	'uses' => 'UserController@deleteAppointmentRow',
	'as' => 'deleteAppointmentRow'
	]);

Route::get('/userLogout', [
	'uses' => 'UserController@userLogout',
	'as' => 'userLogout'
]);
Route::get('/doctor', [
	'uses' => 'UserController@doctor',
	'middleware' => 'auth',
	'as' => 'doctor'
]);

Route::get('/specialities', [
	'uses' => 'UserController@specialities',
	'middleware' => 'auth',
	'as' => 'specialities'
]);

Route::get('/branches', [
	'uses' => 'UserController@branches',
	'middleware' => 'auth',
	'as' => 'branches'
]);