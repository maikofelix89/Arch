<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use App\Photo;

class PhotoController extends Controller
{
    //save photos

    public function store(Request $request){

    	$input=Request::all();

    	$destinationPath = 'house_images/';

    	$image=Request::file('photo')->move($destinationPath);

    	$photo= new Photo();

    	$id=$input['house_id'];

    	$photo->house_id=$input['house_id'];
    	$photo->name=$input['name'];
    	$photo->description=$input['description'];
    	$photo->photo=$image;

    	$photo->save();

    	return redirect('/house/'.$id.'/view')->with('status','Photo Added Successfully');

    	



         
    }
}

 