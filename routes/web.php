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

Route::get("/",[
    "uses" => "NewShopController@index",
    "as"   => "/"
]);

Route::get("/category-product",[
    "uses"=>"NewShopController@categoryProduct",
    "as" => "/category-product"
]);

Route::get("/mailUs",[
    "uses"=> "NewShopController@mailUs",
    "as" => "/mailUs"
]);
Auth::routes();

Route::get('/home', [
    "uses" => "adminController@index",
    "as" => "/home"
]);

Route::get("/dashboard",[
    "uses" =>"adminController@index",
    "as" => "/dashboard"
]);

Route::get("/addcategory",[
    "uses" => "adminController@addcategory",
    'as' => "/addcategory"
]);
Route::get("/managecategory",[
    "uses" =>"adminController@managecategory",
    "as" => "/managecategory"
]);

Route::post("/new-category",[
    "uses" =>"adminController@savecategory",
    "as" => "/new-category"
]);

Route::get("/editpublicationstatus/{id}",[
    "uses"=>"adminController@editpublicationstatus",
    "as"=>"/editpublicationstatus"
]);

Route::get("/editcategory/{id}",[
    "uses"=>"adminController@editcategory",
    "as"=>"/editcategory"
]);

Route::post("/update-category",[
    "uses" => "adminController@updateCategory",
    "as"=>"/update-category"
]);

Route::get("/deletecategory/{id}",[
    "uses" =>"adminController@deleteCategory",
    "as" =>"/deletecategory"
]);

Route::get("/addbrand",[
    "uses"=>"brandController@AddBrand",
    "as"=>"/addbrand"
]);
Route::post("/addabrand",[
    "uses"=>"brandController@AddANewBrand",
    "as"=>"/addabrand"
]);

Route::get('/managebrand',[
   "uses" =>"brandController@ManageBrand",
   "as"=>"/managebrand"
]);

Route::get("/updatestatus/{id}",[
    "uses"=>"brandController@UpdateBrandStatus",
    "as"=>"/updatestatus"
]);

Route::get("/editbarnd/{id}",[
   "uses"=>"brandController@EditBrand",
   "as"=>"/editbarnd"
]);

Route::post("/editabrand",[
    "uses"=>"brandController@EditaBrand",
    "as"=>"/editabrand"
]);

Route::get("/deletebrand/{id}",[
    "uses"=>"brandController@DeleteBrand",
    "as"=>"/deletebrand"
]);