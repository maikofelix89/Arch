@extends('layout.adminlayout')

@section('content')

<div class="row">
	<div class="col-md-8 col-sm-12">

	@foreach($houses as $house)

		<div class="panel panel-success">
		<div class="panel-heading"><h4>{{ $house->house_name }}</h4></div>
			<div class="row">
				<div class="col-md-5">
                 <img src="/{{ $house->photo }}" width="100%"/>
				</div>
				<div class="col-md-7">
				<div class="row">
				 <h4>Description</h4>
				 <p>{{ $house->description }}</p>
				 </div>
				 <div class="row">
				  <a href="/house/{{ $house->id }}/view"class="btn btn-primary"><i class="fa fa-eye fa-fw"></i>View</a>
				  <a class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Delete</a>
		          <a class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Edit</a>
		          <a><i class="fa fa-edit fa-plus fa-fw"></i>Add Photo</a>
				 </div>
				</div>
			</div>
		 <div class="panel-footer">
		 
		 

		 </div>

		</div>

	@endforeach

	</div>

</div>

<div class="row">
<div class="col-md-offset-5">
{!! $houses->render() !!}
</div>
</div>


@endsection