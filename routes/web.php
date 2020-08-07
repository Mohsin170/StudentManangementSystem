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


Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');
Route::get('csv_file','CsvFile@csv_export')->name('export');
Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');
Route::get('/',"StudentController@index");
Route::get('/edit/{RollNo}',"StudentController@edit");
Route::get('/show/{RollNo}',"StudentController@show");
Route::get('/create',"StudentController@create");
Route::post('/store',"StudentController@store");
Route::post('/update/{RollNo}',"StudentController@update");
Route::get('delete/{id}','StudentController@destroy');





Auth::routes();


Route::get('/home', 'HomeController@index')->name('/home');



