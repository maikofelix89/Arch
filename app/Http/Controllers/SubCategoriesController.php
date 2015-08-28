<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategory;
use Request;

class SubCategoriesController extends Controller
{
    //show subcategiries

   

    public function index(){

    	$subcategories=Subcategory::all();

    	return view('SubCategory.view_subcategories',compact('subcategories'));

    }


    //show create subcategory form

    public function create(){

    	 $categories = Category::all();

    	return view('SubCategory.create_subcategory',compact('categories'));
    }

    //store subcategory name

    public function store(Request $request){

    	$input=Request::all();

    	$subcategory=new Subcategory();

    	$subcategory->cat_id=$input['cat_id'];
    	$subcategory->name=$input['name'];
    	$subcategory->description=$input['description'];
    	$subcategory->save();

    	return redirect('/subcategory/create')->with('status','SubCategory was successfully created');

    }
}
