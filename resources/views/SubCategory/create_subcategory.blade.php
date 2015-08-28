@extends('layout.layout')

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



{!! Form::open(array('url' => '/subcategory/store','class'=>'form-horizontal')) !!}


<div class="form-group">



<div class="col-md-offset-2 col-md-8">
<label>Category Name</label>
<select class="form-control" name="cat_id">
@foreach($categories as $category)
<option value="{{ $category->id }}">{{ $category->cat_name }}</option>
@endforeach
</select>
</div>
</div>

<div class="col-md-offset-2 col-md-8">
<label>Sub Categrory Name</label>
<input type="text" class="form-control" name="name"  required>
</div>
</div>

<div class="col-md-offset-2 col-md-8">
<label>Decription</label>
<textarea class="form-control" name="description"></textarea>
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