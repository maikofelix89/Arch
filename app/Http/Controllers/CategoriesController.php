<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Category;

class CategoriesController extends Controller
{
    //show categories

    public function index(){

    	$categories=Category::all();

    	return view('Category.view_categories',compact('categories'));

    }


    //create category

    public function create(){

    	return view('Category.add_category');
    }

    public function store(Request $request){

    	$input=Request::all();

    	$category=new Category;

    	$category->cat_name=$input['cat_name'];

    	$category->save();

    	return redirect('category/create')->with('status','Category succesfully added');


    }
}
