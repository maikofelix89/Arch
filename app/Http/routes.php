<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/ 

//category routes

Route::get('/categories/view','CategoriesController@index');
Route::get('/category/create','CategoriesController@create');
Route::post('/category/store','CategoriesController@store');

//subcategories routes
Route::get('/subcategories','SubCategoriesController@index');
Route::get('/subcategory/create','SubCategoriesController@create');
Route::post('/subcategory/store','SubCategoriesController@store');

//House routes
Route::get('/houses/view','HouseController@index');
Route::get('/house/create','HouseController@create');
Route::post('/house/store','HouseController@store');
Route::get('/house/{id}/view','HouseController@viewhouse');

//photos
Route::post('/photo/store','PhotoController@store');





Route::get('/', function () {
    return view('layout.adminlayout');
});
