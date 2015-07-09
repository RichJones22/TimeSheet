<?php


/**
 * The Home Page
 */
Route::get('/', 'PagesController@home');

/**
 * Time Sheets
 */
Route::resource('timesheets','TimeSheetsController');

/**
 * Time Sheets
 */
Route::resource('customers','CustomersController');


/**
 * Authentication
 */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
