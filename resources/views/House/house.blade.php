@extends('layout.adminlayout')


@section('content')

<div class="row">
<div class="container">
 <div class="col-md-10">
  <div class="row">
  

    <div class="col-md-8">
    	<div class="thumbnail">
    	  <img src="/{{ $house->photo }}" />
    	  <div class="caption">
    	  <h4>{{ $house->house_name }}</h4>
         <hr class="intro-divider" />
        
    	  </div>
    	 
    	  <!-- Large modal -->
<a type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-edit fa-plus fa-fw"></i>Add Photo</a>
    	</div>
    </div>
    <div class="col-md-4">
     <p>{{ $house->description }}</p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    	<div class="panel">
      @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
      @endif
    		
    		<div class="panel-body">
			
      <div class="row">

      @foreach($photos as $photo)
      <div class="panel">
      <div class="panel-body">
       <h3>{{ $photo->name }}</h3>
      <div class="col-md-6">
     
        <img src="/{{ $photo->photo }}"  width="100%" />

      </div>
      <div class="col-md-6">
       <p>{{ $photo->description }}</p>
      </div>
      </div>
       </div>
      @endforeach
      
      </div>
			</div>
    	</div>
    </div>

  </div>

 </div>

</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="row">
       <div class="container">
    <div class="col-md-offset-2 col-md-6">
    <div class="panel">
    <div class="panel-body">

       
       {!! Form::open(array('url' => '/photo/store','class'=>'form-horizontal','files' => 'true')) !!}


<div class="form-group">



<div class="col-md-offset-2 col-md-8">
<label>Name</label>
<input type="text" class="form-control" name="name"  required>
<input type="hidden" class="form-control" value ="{{ $house->id }}" name="house_id"  required>
</div>
</div>



<div class="form-group">

<div class="col-md-offset-2 col-md-8">
 <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="photo"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>

</div>


</div>

<div class="form-group">

<div class="col-md-offset-2 col-md-8">

<label>Description</label>
<textarea name="description" class="form-control"></textarea>


</div>
</div>





<div class="form-group">

<div class="col-md-offset-2 col-md-8">
<button type="submit" class="btn btn-primary">
Create
</button>
							
</div>
</div>
</form>
</div><!-- end of panel body -->
</div><!-- end of panel -->
</div><!-- end of column -->
</div><!-- end of row -->
</div><!-- end of container -->

  </div>
  </div>
  </div><!-- end of container -->
</div>

@endsection