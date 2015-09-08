<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\House;
use App\Category;


class ClientController extends Controller
{
    //show the landing page

    public function index(){

    	
    	$categories = Category::all();

    	$houses = \DB::table('houses')
            ->join('sub_categories', 'houses.sub_cat_id', '=', 'sub_categories.id')
            ->join('categories', 'sub_categories.cat_id', '=', 'categories.id')           
            ->select('houses.*', 'houses.house_name', 'sub_categories.name','categories.cat_name')
            ->get();

    	

    	return view('welcome',compact('houses','categories'));
    }
}
