@extends('layout.layout')


@section('content')



<div class="row" ng-controller="housectr">
<div class="container">
<div class="col-md-3">
<h3 align="center">Search</h3>
  <form>
  <div class="form-group">
   <label>Category</label>
   <select class="form-control" name="category" id="category" ng-model="category">
    @foreach($categories as $category)
     <option name="mainsub" value="{{$category->cat_name}}">{{ $category->cat_name }}</option>

     @endforeach
   </select>
  </div>

   <div class="form-group">
   <label>Sub Category</label>
   <select class="form-control"  id="subcategory"  ng-model="subcategory">

   
    @foreach($categories as $category)
     <option>{{ $category->cat_name }}</option>

     @endforeach
   </select>
  </div>
  </form>
</div>
<div class="col-md-9">
<h3 align="center">Latest Houses</h3>
<hr class="intro-divider" width="40%" />
 <div class="row" >
 @foreach($houses as $house)

 <div class="col-md-4">
   <h4>{{$house->cat_name }}</h4>
   <div class="thumbnail" id="housethumb">
   <img src="{{ $house->photo}}" />
    <div class="caption">
    <p>{{$house->house_name }}</p>
    <p>{{$house->name }}</p>
    </div>

   </div>

 </div>


 @endforeach
  
  
 </div>

   
 </div>
</div>
</div><!-- end of container -->
</div>

@endsection