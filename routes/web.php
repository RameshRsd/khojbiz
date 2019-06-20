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
Route::get('search_product','User\ApplicationController@search_product');
Route::get('product','User\ApplicationController@product');
Route::get('buying-selling','User\ApplicationController@buying_selling');
Route::get('places','Place\LocationController@index');
Route::get('place_name', array('as' => 'place_name', 'uses'=>'HomeController@place_name'));

Route::get('update_client_about','HomeController@update_about');
//Auth::routes();
//Browse by alphabates //
Route::group(['middleware'=>'guest'],function(){
    Route::get('login','HomeController@getLogin')->name('login');
    Route::post('login','HomeController@postLogin');
    Route::get('register','HomeController@getregister')->name('register');
    Route::post('register','HomeController@postregister');

});
Route::get('browse-by-alphabates/list_{alpha}','AlphabateController@index');
Route::get('product-by-alpha/list_{alpha}','AlphabateController@product_index');
Route::get('manufacturers-browse-by-alphabet/list_{alpha}','AlphabateController@manufacture_alpha');
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
    /* ============================== Client-Profile-Section ========================================= */
    Route::get('{name}/edit-about','ClientProfile\ClientAboutUsController@edit_about');
    Route::post('client/{id}/edit-about','ClientProfile\ClientAboutUsController@update_about');
    Route::post('{name}/edit-profile','ClientProfile\ClientAboutUsController@add_profile');

    Route::get('list-clients/client_id={id}/edit_contact','ClientProfile\ClientContactUsController@edit_contact');
    Route::post('list-clients/client_id={id}/edit_contact','ClientProfile\ClientContactUsController@update_contact');
    /* ============================== Client-Profile-Section ========================================= */

    /* ============================== Ads-Section ========================================= */
    Route::get('list-advets','AdsController@index');
    Route::get('create-advets','AdsController@create');
    Route::post('create-advets','AdsController@store');
    Route::get('list-adverts/advert_id={id}/edit','AdsController@edit');
    Route::post('list-adverts/advert_id={id}/edit','AdsController@update');
    Route::get('list-adverts/advert_id={id}/delete','AdsController@delete');
    /* ============================== Jobs-Section ========================================= */

    /* ============================== Product Buying Selling  ========================================= */
    Route::get('list-suppliers','Product\ProductController@index');
    Route::get('add-new-suppliers','Product\ProductController@create');
    Route::post('add-new-suppliers','Product\ProductController@store');
    Route::get('list-suppliers/suppliers_id={id}/edit','Product\ProductController@edit_product');
    Route::post('list-suppliers/suppliers_id={id}/edit','Product\ProductController@product_update');

    /* ============================== Category-========================================= */
    Route::get('add-product-category','Product\CategoryController@index');
    Route::post('add-product-category','Product\CategoryController@store');
    Route::post('add-product-category/cat_id={id}/edit','Product\CategoryController@update');
    Route::get('product-wise-suppliers','Product\ProductWiseSuppliersController@index');
    Route::post('product-wise-suppliers','Product\ProductWiseSuppliersController@store');
    /* ============================== Category ========================================= */
    /* ============================== Sell Automobiles ========================================= */
    Route::get('sell-automobiles','Product\ProductController@index');
    Route::get('sell-new-automobiles','Product\Automobiles\AutomobilesController@index');
    /* ============================== Sell Automobiles ========================================= */

    /* ============================== Product Buying Selling ========================================= */
    /* ==============================Location/Places========================================= */
    Route::get('locations','Location\LocationController@index');
    Route::get('create-location','Location\LocationController@create');
    Route::post('create-location','Location\LocationController@store');
    Route::get('locations/{id}/edit','Location\LocationController@edit');
    Route::post('locations/{id}/edit','Location\LocationController@update');

    Route::get('locations-categories','Location\LocationCategoryController@index');
    Route::post('locations-categories','Location\LocationCategoryController@store');
    Route::post('location-category-update/{id}','Location\LocationCategoryController@udpate');
    /* ==============================Location/Places========================================= */
    /* ============================== Candidate-Section ========================================= */
    Route::get('list-candidates','CandidateController@index');
    Route::get('list-candidates/candidate_id={id}/edit','CandidateController@edit');
    Route::post('list-candidates/candidate_id={id}/edit','CandidateController@update');
    /* ============================== Candidate-Section ========================================= */



});
/* ================================================ Admin CONTROL Start============================================================== */

/* ================================================ Client CONTROL Start============================================================== */
Route::group(['middleware'=>['client','verified'],'prefix'=>'client','namespace'=>'Client'],function(){

});
/* ================================================ Client CONTROL Start============================================================== */
Route::group(['middleware'=>['users','verified'],'prefix'=>'users','namespace'=>'User'],function(){
    Route::get('','UserController@index');

    Route::get('about-us','UserController@about_us');
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


    /* ==============================Location/Places========================================= */
    Route::get('locations','LocationController@index');
    Route::get('create-location','LocationController@create');
    Route::post('create-location','LocationController@store');
    Route::get('locations/{id}/edit','LocationController@edit');
    Route::post('locations/{id}/edit','LocationController@update');

    Route::get('locations-categories','LocationCategoryController@index');
    Route::post('locations-categories','LocationCategoryController@store');
    Route::post('location-category-update/{id}','LocationCategoryController@udpate');
    /* ==============================Location/Places========================================= */
    /* ============================== Product   ========================================= */
    Route::get('list-suppliers','Product\ProductController@index');
    Route::get('add-new-suppliers','Product\ProductController@create');
    Route::post('add-new-suppliers','Product\ProductController@store');
    Route::get('list-suppliers/suppliers_id={id}/edit','Product\ProductController@edit_product');
    Route::post('list-suppliers/suppliers_id={id}/edit','Product\ProductController@product_update');

    /* ============================== Category-========================================= */
    Route::get('add-product-category','Product\CategoryController@index');
    Route::post('add-product-category','Product\CategoryController@store');
    Route::post('add-product-category/cat_id={id}/edit','Product\CategoryController@update');
    Route::get('product-wise-suppliers','Product\ProductWiseSuppliersController@index');
    Route::post('product-wise-suppliers','Product\ProductWiseSuppliersController@store');
    /* ============================== Category ========================================= */
    /* ============================== manufacturers ========================================= */
    Route::get('list-manufacturers','ManufactureCompany\ManufactureCompanyController@index');
    Route::get('create-manufacture','ManufactureCompany\ManufactureCompanyController@create');
    Route::post('create-manufacture','ManufactureCompany\ManufactureCompanyController@store');
    Route::get('list-manufacturers/manufacture_id={id}/edit','ManufactureCompany\ManufactureCompanyController@edit');
    Route::post('list-manufacturers/manufacture_id={id}/edit','ManufactureCompany\ManufactureCompanyController@update');

    Route::get('add-category-of-manufacturers/menu={id}/edit','ManufactureCompany\ManufactureCategoryController@edit');
    Route::post('add-category-of-manufacturers/menu={id}/edit','ManufactureCompany\ManufactureCategoryController@update');
    /* ============================== create-of-manufacturers end========================================= */


});

/* ================================================ Staff Controller  end ============================================================= */



Route::any('{UserName}','User\ApplicationController@overview');
Route::any('{UserName}/about-us','User\ApplicationController@about_us');
Route::any('{UserName}/profile','User\ApplicationController@client_profile');
Route::any('{UserName}/image-gallery','User\ApplicationController@image_gallery');
Route::any('{UserName}/product-and-service','User\ApplicationController@product_and_service');
Route::any('{UserName}/contact-us','User\ApplicationController@contact_us');
Route::any('manufacturers/{slug}','Admin\ManufactureCompany\ManufactureCompanyController@manufacturing');


Route::any('companyinfo/{slug}','User\ApplicationController@product_details');


/*=====================Manufacture ========================*/
Route::any('{UserName}','User\ApplicationController@menu_overview');
/*=====================Manufacture end========================*/