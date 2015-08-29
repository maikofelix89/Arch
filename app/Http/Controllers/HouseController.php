<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\House;
use App\Subcategory;
use App\Photo;

class HouseController extends Controller
{
    //show houses
    public function index(){

    	$houses = \DB::table('houses')->orderBy('id', 'desc')->paginate(3);

    	

    	return view('House.view_house',compact('houses'));

    }

    public function create(){

    	$subcats=Subcategory::all();

    	return view('House.create_house',compact('subcats'));


    }

    public function store(Request $request){

    	$input=Request::all();

    	$destinationPath = 'house_images/';

    	$image=Request::file('photo')->move($destinationPath);

    	

       

    	$house=new House();

    	$house->sub_cat_id=$input['sub_cat_id'];
    	$house->house_name=$input['house_name'];
    	$house->description=$input['description'];
    	$house->photo=$image;

    	$house->save();



    	return redirect('/house/create')->with('status','House successfully added');
    	


    }

    public function viewhouse($id){

    	$house=House::findorFail($id);

        $photos=Photo::where('house_id',$id)->get();


    	return view('House.house',compact('house','photos'));

    }
}
