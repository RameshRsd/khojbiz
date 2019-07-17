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

Route::get('checkmail','HomeController@checkmail');
Route::get('','HomeController@index');
Route::get('top-companies-ajax','AjaxController@top_company');
Route::get('top-manufacture-companies-ajax','AjaxController@top_manufacture');
Route::get('top-products-ajax','AjaxController@top_products');
Route::get('popular_category-ajax','AjaxController@popular_category');
Route::get('profile','User\ApplicationController@profile');
Route::get('search','User\ApplicationController@search');
Route::get('search-manufacture','User\ApplicationController@search_manufacture');
Route::get('search_product','User\ApplicationController@search_product');
Route::get('product','User\ApplicationController@product');
Route::get('buying-selling','User\ApplicationController@buying_selling');
Route::get('places','Place\LocationController@index');
Route::get('place_name', array('as' => 'place_name', 'uses'=>'HomeController@place_name'));
Route::any('companyinfo/{slug}','User\ApplicationController@product_details');

Route::get('client-area','PackageController@index');
//Auth::routes();
//Browse by alphabates //
Route::group(['middleware'=>'guest'],function(){
    Route::get('login','HomeController@getLogin')->name('login');
    Route::post('login','HomeController@postLogin');
    Route::get('register','HomeController@getregister');
    Route::post('register','HomeController@postregister');
    Route::get('business/register','HomeController@get_business_register');
    Route::post('business/register','HomeController@post_business_register');
    /*manufacture*/
    Route::get('manufacture/register','HomeController@get_manufacture_register');
    Route::post('manufacture/register','HomeController@post_manufacture_register');

//    Route::get('register','HomeController@getregister')->name('register');
//    Route::post('register','HomeController@postregister');

});
Route::get('browse-by-alphabates/list_{alpha}','AlphabateController@index');
Route::get('product-by-alpha/list_{alpha}','AlphabateController@product_index');
Route::get('manufacturers-browse-by-alphabet/list_{alpha}','AlphabateController@manufacture_alpha');
Route::get('browse-by-category/{slug}','AlphabateController@category');
Route::get('browse-by-category/list/{id}','CategoryController@list_category');


Route::post('client/get_enquiry/{id}','Client\\ClientController@get_enquiry');
Route::get('email-checker','AjaxController@emailChecker')->name('email-checker');

Route::any('logout', 'Auth\LoginController@logout')->name('logout');

/* ================================================ Admin CONTROL Start============================================================== */
Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('','AdminController@index');

    /* ============================== User Managment ========================================= */
    Route::get('users','UserController@index');
    Route::get('users/uid={id}/edit','UserController@edit');
    Route::post('users/update-email/{id}','UserController@update_email');
    Route::post('users/update-password/{id}','UserController@update_password');
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
    Route::get('company-nature/nature_id={id}/trash','CategoryController@trash');
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
    Route::get('list-clients/client_id={id}/delete','ClientController@delete');
    /* ============================== Client-Section ========================================= */
    /* ============================== Client-Profile-Section ========================================= */
    Route::get('{name}/edit-about','ClientProfile\ClientAboutUsController@edit_about');
    Route::post('client/{id}/edit-about','ClientProfile\ClientAboutUsController@update_about');
    Route::post('{name}/edit-profile','ClientProfile\ClientAboutUsController@add_profile');

    Route::get('list-clients/client_id={id}/edit_contact','ClientProfile\ClientContactUsController@edit_contact');
    Route::post('list-clients/client_id={id}/edit_contact','ClientProfile\ClientContactUsController@update_contact');
    /* ============================== Client-Profile-Section ========================================= */

    /* ============================== Package-Section ========================================= */
    Route::get('list-package','PackageController@index');
    Route::get('add-package','PackageController@create');
    Route::post('add-package','PackageController@store');
    Route::get('list-package/{id}/edit','PackageController@edit');
    Route::post('list-package/{id}/edit','PackageController@update');
    Route::get('package-feature','PackageController@package_feature');
    Route::post('package-feature','PackageController@package_feature_store');
    Route::post('package-feature/{id}/update','PackageController@package_feature_update');
    /* ============================== Package-Section ========================================= */

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
    /* ==============================Web site listing ========================================= */
    Route::get('list-website','Website\WebsiteController@index');
    Route::get('add-website','Website\WebsiteController@create');
    Route::post('add-website','Website\WebsiteController@store');
    /* ==============================Web site listing ========================================= */

    /* ============================== Candidate-Section ========================================= */
    Route::get('list-candidates','CandidateController@index');
    Route::get('list-candidates/candidate_id={id}/edit','CandidateController@edit');
    Route::post('list-candidates/candidate_id={id}/edit','CandidateController@update');
    /* ============================== Candidate-Section ========================================= */

    Route::post('update_payment/{id}','PaymentController@update_payment');
    Route::post('user_account_update/{id}','UserController@update_user_account');


});
/* ================================================ Admin CONTROL Start============================================================== */

/* ================================================ Client CONTROL Start============================================================== */
Route::group(['middleware'=>['client','verified'],'prefix'=>'client','namespace'=>'Client'],function(){
    Route::get('','ClientController@index');

    Route::get('edit-profile/business-details','ProfileController@business_details');
    Route::post('edit-profile/business-details','ProfileController@update_business_details');
    Route::get('edit-profile/contact-details','ProfileController@contact_details');
    Route::post('edit-profile/contact-details','ProfileController@update_contact_details');
    Route::get('edit-profile/about-company','ProfileController@about_company');
    Route::post('edit-profile/about-company','ProfileController@update_about_company');

    Route::get('service-manage/new-service','ServiceController@create');
    Route::post('service-manage/new-service','ServiceController@store');
    Route::get('service-manage/list-service','ServiceController@index');
    Route::get('service-manage/list-service/{id}/edit','ServiceController@edit');
    Route::post('service-manage/list-service/{id}/edit','ServiceController@update');
    Route::get('service-manage/list-service/{id}/delete','ServiceController@delete');

    Route::get('gallery-manage/list-images','GalleryController@index');
    Route::get('gallery-manage/new-images','GalleryController@create');
    Route::post('gallery-manage/new-images','GalleryController@store');
    Route::get('gallery-manage/list-images/{id}/edit','GalleryController@edit');
    Route::post('gallery-manage/list-images/{id}/edit','GalleryController@update');
    Route::get('gallery-manage/list-images/{id}/delete','GalleryController@delete');

    Route::get('notice/list-notice','NoticeController@index');
    Route::get('notice/new-notice','NoticeController@create');
    Route::post('notice/new-notice','NoticeController@store');
    Route::get('notice/list-notice/{id}/edit','NoticeController@edit');
    Route::post('notice/list-notice/{id}/edit','NoticeController@update');
    Route::get('notice/list-notice/{id}/delete','NoticeController@delete');


    Route::get('enquiry','ClientController@enquiry');

});
/* ================================================ Client CONTROL Start============================================================== */
Route::group(['middleware'=>['users','verified'],'prefix'=>'users','namespace'=>'User'],function(){
    Route::get('','UserController@index');

    Route::get('about-us','UserController@about_us');
});

/* ================================================ Business CONTROL Start============================================================== */
Route::group(['middleware'=>['business','verified'],'prefix'=>'business','namespace'=>'Business'],function(){
    Route::get('','BusinessController@index');

    Route::get('about-us','UserController@about_us');
});
/* ================================================ Manufacture CONTROL Start============================================================== */
Route::group(['middleware'=>['manufacture','verified'],'prefix'=>'manufacture','namespace'=>'Manufacture'],function(){
    Route::get('','ManufactureController@index');

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



Route::get('{UserName}','User\ApplicationController@overview');
Route::get('{UserName}/view-service={id}','User\ApplicationController@view_service');
Route::get('{UserName}/view-notice={id}','User\ApplicationController@view_notice');
Route::any('{UserName}/about-us','User\ApplicationController@about_us');
Route::any('{UserName}/profile','User\ApplicationController@client_profile');
Route::any('{UserName}/image-gallery','User\ApplicationController@image_gallery');
Route::any('{UserName}/product-and-service','User\ApplicationController@product_and_service');
Route::any('{UserName}/contact-us','User\ApplicationController@contact_us');
Route::any('manufacturers/{slug}','Admin\ManufactureCompany\ManufactureCompanyController@manufacturing');


///*=====================Manufacture ========================*/
//Route::any('{UserName}','User\ApplicationController@menu_overview');
///*=====================Manufacture end========================*/
/*===================== Product  ========================*/
Route::any('top-location/{slug}','User\ApplicationController@location_details');
/*===================== Product end========================*/