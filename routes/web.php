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
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::resource('/demand', 'DemandController');

Route::get('/company/step1', 'CompanyController@step1')->name('step2');

Route::post('/company/step2', 'CompanyController@storecompany')->name('company');

Route::get('/company/step3', 'CompanyController@step3');

Route::resource('/company', 'CompanyController');
=======
Route::get('/offer/createoffer', 'OfferController@createOffer');
Route::get('/offer/createopenoffer', 'OfferController@createOpenoffer');
Route::get('/offer/createrequest', 'OfferController@createRequest');
Route::get('/offer/confirm', 'OfferController@confirmOffer');
Route::resource('/offer', 'OfferController');

Route::get('/vision', 'GoogleVisionController@displayForm');
Route::post('/vision', 'GoogleVisionController@showImageResults');

Route::get('/test', function () {
    return view('auth.verifyDesign');
});
Route::get('/test1', function () {
    return view('auth.info');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
>>>>>>> master
