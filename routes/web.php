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

Route::get('','HomeController@index');

//Auth::routes();



Route::group(['middleware'=>'guest'],function(){
    Route::get('login','HomeController@getLogin')->name('login');
    Route::post('login','HomeController@postLogin');
    Route::get('register','HomeController@getregister')->name('register');
    Route::post('register','HomeController@postregister');

});

Route::any('logout', 'Auth\LoginController@logout')->name('logout');

/* ================================================ Admin CONTROL Start============================================================== */
Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('','AdminController@index');

    /* ============================== User Managment ========================================= */
    Route::get('users','UserController@index');
    /* ============================== User Managment ========================================= */

    /* ============================== Location Managment ========================================= */
    Route::get('countries','CountryController@index');
    Route::post('countries','CountryController@store');
    Route::get('countries/country_id={id}/edit','CountryController@edit');
    Route::post('countries/country_id={id}/edit','CountryController@update');

    Route::get('states','StateController@index');
    Route::post('states','StateController@store');
    Route::get('states/state_id={id}/edit','StateController@edit');
    Route::post('states/state_id={id}/edit','StateController@update');

    Route::get('district','DistrictController@index');
    Route::post('district','DistrictController@store');
    Route::get('district/district_id={id}/edit','DistrictController@edit');
    Route::post('district/district_id={id}/edit','DistrictController@update');
    /* ============================== Location Managment ========================================= */

    /* ============================== Company-Natrue ========================================= */
    Route::get('company-nature','CompanyNatureController@index');
    Route::post('company-nature','CompanyNatureController@store');
    Route::get('company-nature/nature_id={id}/edit','CompanyNatureController@edit');
    Route::post('company-nature/nature_id={id}/edit','CompanyNatureController@update');
    /* ============================== Company-Natrue ========================================= */

    /* ============================== Client-Section ========================================= */
    Route::get('list-clients','ClientController@index');
    Route::get('create-client','ClientController@create');
    Route::post('create-client','ClientController@store');
    Route::get('list-clients/client_id={id}/edit','ClientController@edit');
    Route::post('list-clients/client_id={id}/edit','ClientController@update');
    /* ============================== Client-Section ========================================= */



    /* ============================== Ads-Section ========================================= */
    Route::get('list-advets','AdsController@index');
    Route::get('create-advets','AdsController@create');
    Route::post('create-advets','AdsController@store');
    Route::get('list-adverts/advert_id={id}/edit','AdsController@edit');
    Route::post('list-adverts/advert_id={id}/edit','AdsController@update');
    Route::get('list-adverts/advert_id={id}/delete','AdsController@delete');
    /* ============================== Jobs-Section ========================================= */

    /* ============================== Candidate-Section ========================================= */
    Route::get('list-candidates','CandidateController@index');
    Route::get('list-candidates/candidate_id={id}/edit','CandidateController@edit');
    Route::post('list-candidates/candidate_id={id}/edit','CandidateController@update');
    /* ============================== Candidate-Section ========================================= */



});
/* ================================================ Admin CONTROL Start============================================================== */

/* ================================================ Client CONTROL Start============================================================== */
Route::group(['middleware'=>'client','prefix'=>'client','namespace'=>'Client'],function(){
    Route::get('','ClientController@index');
});

/* ================================================ Client CONTROL Start============================================================== */



