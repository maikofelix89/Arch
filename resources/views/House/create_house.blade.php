@extends('layout.adminlayout')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-offset-2 col-md-6">
<div class="panel">
<div class="panel-heading"><h3 align="center">Create Category</h3></div>
<div class="panel-body">
 @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    @if (count($errors) > 0)
	<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
	     @foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	     @endforeach

</ul>
</div>

    @endif



{!! Form::open(array('url' => '/house/store','class'=>'form-horizontal','files' => 'true')) !!}


<div class="form-group">



<div class="col-md-offset-2 col-md-8">
<label>House Name</label>
<input type="text" class="form-control" name="house_name"  required>
</div>
</div>


<div class="form-group">



<div class="col-md-offset-2 col-md-8">
<label>Sub Category</label>
<select name="sub_cat_id">
@foreach($subcats as $subcat)
<option value="{{ $subcat->id }}">{{ $subcat->name }}</option>
@endforeach
	
</select>
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

</div>
</div>
</div>
</div>
</div>




@endsection