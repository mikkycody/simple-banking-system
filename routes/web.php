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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pay', 'HomeController@pay')->name('pay');
Route::get('/loans', 'HomeController@loan')->name('loans');
Route::post('/loans', 'HomeController@loanDb')->name('loans');
Route::get('/transfer', 'HomeController@transfer')->name('transfer');
Route::post('/confirm-transfer', 'HomeController@otpConfirm')->name('transfer');
Route::post('/transfer', 'HomeController@transferDb')->name('transfer');
Route::post('/confirm-pay', 'HomeController@otpConfirmPay')->name('pay');
Route::post('/pay', 'HomeController@payDb')->name('pay');
Route::get('sendbasicemail','MailController@basic_email');
// Route::get('sendhtmlemail','MailController@html_email');
// Route::get('sendattachmentemail','MailController@attachment_email');



