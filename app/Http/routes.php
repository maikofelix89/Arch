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

Route::get('/categories/view','CategoriesController@index');
Route::get('/category/create','CategoriesController@create');
Route::post('/category/store','CategoriesController@store');


Route::get('/subcategories','SubCategoriesController@index');
Route::get('/subcategory/create','SubCategoriesController@create');
Route::post('/subcategory/store','SubCategoriesController@store');



Route::get('/', function () {
    return view('welcome');
});
