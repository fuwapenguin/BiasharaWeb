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

Route::resource('/demand', 'DemandController');

Route::get('/company/step1', 'CompanyController@step1')->name('step2');

Route::post('/company/step2', 'CompanyController@storecompany')->name('company');

Route::get('/company/step3', 'CompanyController@step3');

Route::resource('/company', 'CompanyController');
