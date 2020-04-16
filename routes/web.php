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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/offer/createoffer', 'OfferController@createOffer');
Route::get('/offer/createopenoffer', 'OfferController@createOpenoffer');
Route::get('/offer/createrequest', 'OfferController@createRequest');
Route::get('/offer/confirm', 'OfferController@confirmOffer');
Route::post('/offer/createoffer', 'OfferController@showImageResults');
Route::resource('/offer', 'OfferController');

Route::get('/vision', 'GoogleVisionController@displayForm');
Route::post('/vision', 'GoogleVisionController@showImageResults');

