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
Route::get('profile','User\ApplicationController@profile');
Route::get('search','User\ApplicationController@search');
Route::get('product','User\ApplicationController@product');
Route::get('buying-selling','User\ApplicationController@buying_selling');

//Auth::routes();

//Browse by alphabates //

Route::group(['middleware'=>'guest'],function(){
    Route::get('login','HomeController@getLogin')->name('login');
    Route::post('login','HomeController@postLogin');
    Route::get('register','HomeController@getregister')->name('register');
    Route::post('register','HomeController@postregister');

});
Route::get('browse-by-alphabates/list_{alpha}','AlphabateController@index');
Route::get('browse-by-category/{slug}','AlphabateController@category');
Route::get('browse-by-category/list/{id}','CategoryController@list_category');


Route::any('logout', 'Auth\LoginController@logout')->name('logout');

/* ================================================ Admin CONTROL Start============================================================== */
Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('','AdminController@index');

    /* ============================== User Managment ========================================= */
    Route::get('users','UserController@index');
    /* ============================== User Managment ========================================= */

    /* ============================== Staff Managment ========================================= */
    Route::get('staffs','StaffController@index');
    Route::get('create-staff','StaffController@create');
    Route::post('create-staff','StaffController@store');
    Route::get('staff/staff_id={id}/edit','StaffController@edit');
    Route::post('staff/staff_id={id}/edit','StaffController@update');
    /* ============================== Staff Managment ========================================= */

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
    /* ============================== Category-========================================= */
    Route::get('add-category','CategoryController@index');
    Route::post('add-category','CategoryController@store');
    Route::get('add-category/nature_id={id}/edit','CategoryController@edit');
    Route::post('add-category/nature_id={id}/edit','CategoryController@update');
    /* ============================== Category ========================================= */
    /* ==============================Sub Category-========================================= */
    Route::get('add-sub-category','SubCategoryController@index');
    Route::post('add-sub-category','SubCategoryController@store');
    Route::get('add-category/nature_id={id}/edit','CategoryController@edit');
    Route::post('add-category/nature_id={id}/edit','CategoryController@update');
    /* ==============================Sub Category End========================================= */
    /* ==============================create-of-manufacturers========================================= */
    Route::get('list-manufacturers','ManufactureCompany\ManufactureCompanyController@index');
    Route::get('create-manufacturers','ManufactureCompany\ManufactureCompanyController@create');
    Route::post('create-manufacturers','ManufactureCompany\ManufactureCompanyController@store');
    Route::get('list-manufacturers/manufacture_id={id}/edit','ManufactureCompany\ManufactureCompanyController@edit');
    Route::post('list-manufacturers/manufacture_id={id}/edit','ManufactureCompany\ManufactureCompanyController@update');

    Route::get('add-category-of-manufacturers/menu={id}/edit','ManufactureCompany\ManufactureCategoryController@edit');
    Route::post('add-category-of-manufacturers/menu={id}/edit','ManufactureCompany\ManufactureCategoryController@update');
    /* ============================== create-of-manufacturers end========================================= */
    /* ==============================add-category-of-manufacturers========================================= */
    Route::get('add-category-of-manufacturers','ManufactureCompany\ManufactureCategoryController@index');
    Route::post('add-category-of-manufacturers','ManufactureCompany\ManufactureCategoryController@store');
    Route::get('add-category-of-manufacturers/menu={id}/edit','ManufactureCompany\ManufactureCategoryController@edit');
    Route::post('add-category-of-manufacturers/menu={id}/edit','ManufactureCompany\ManufactureCategoryController@update');
    /* ============================== add-category-of-manufacturers ========================================= */
    /* ==============================Sub category-of-manufacturers-========================================= */
    Route::get('add-sub-category-of-manufacturers','ManufactureCompany\ManufactureSubCategoryController@index');
    Route::post('add-sub-category-of-manufacturers','ManufactureCompany\ManufactureSubCategoryController@store');
    Route::get('add-sub-category-of-manufacturers/menu={id}/edit','ManufactureCompany\ManufactureSubCategoryController@edit');
    Route::post('add-sub-category-of-manufacturers/menu={id}/edit','ManufactureCompany\ManufactureSubCategoryController@update');
    /* ==============================Sub Ccategory-of-manufacturers end========================================= */
    /* ==============================category-wise-manufacturers-========================================= */
    Route::get('category-wise-manufactures','ManufactureCompany\ManufactureCategoryController@cat_wise_manufacture');
    Route::post('category-wise-manufactures','ManufactureCompany\ManufactureCategoryController@cat_wise_manufacture_store');
    /* ==============================category-wise-manufacturers End========================================= */
    /* ==============================Category Wise ClientController-========================================= */
    Route::get('category-wise-client','ClientCategory\CategoryWiseClientController@index');
    Route::post('category-wise-client','ClientCategory\CategoryWiseClientController@store');
    /* ==============================Sub Category End========================================= */

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
Route::group(['middleware'=>['client','verified'],'prefix'=>'client','namespace'=>'Client'],function(){
    Route::get('','ClientController@index');
    Route::get('member-profile','ClientController@profile_p');
});

/* ================================================ Staff Controller Start============================================================== *//* ================================================ Client CONTROL Start============================================================== */
Route::group(['middleware'=>['staff','verified'],'prefix'=>'staff','namespace'=>'Staff'],function(){
    Route::get('','StaffController@index');
    /* ============================== Client-Section ========================================= */
    Route::get('list-clients','ClientController@index');
    Route::get('create-client','ClientController@create');
    Route::post('create-client','ClientController@store');
    Route::get('list-clients/client_id={id}/edit','ClientController@edit');
    Route::post('list-clients/client_id={id}/edit','ClientController@update');
    /**/
    Route::get('category-wise-client','ClientController@cat_wise_client');
    Route::post('category-wise-client','ClientController@cat_wise_client_store');
    /* ============================== Client-Section ========================================= */
    /* ============================== Category-========================================= */
    Route::get('add-category','CategoryController@index');
    Route::post('add-category','CategoryController@store');
    Route::get('add-category/nature_id={id}/edit','CategoryController@edit');
    Route::post('add-category/nature_id={id}/edit','CategoryController@update');
    /* ============================== Category ========================================= */
    /* ==============================Sub Category-========================================= */
    Route::get('add-sub-category','SubCategoryController@index');
    Route::post('add-sub-category','SubCategoryController@store');
    Route::get('add-sub-category/sub_cat_id={id}/edit','SubCategoryController@edit');
    Route::post('add-sub-category/sub_cat_id={id}/edit','SubCategoryController@update');
    /* ==============================Sub Category End========================================= */
});

/* ================================================ Staff Controller  end ============================================================= */



Route::any('{UserName}','User\ApplicationController@overview');
Route::any('{slug}/about-us','User\ApplicationController@about_us');
Route::any('{slug}/profile','User\ApplicationController@client_profile');
Route::any('{slug}/product-and-service','User\ApplicationController@product_and_service');
Route::any('manufacturers/{slug}','Admin\ManufactureCompany\ManufactureCompanyController@manufacturing');