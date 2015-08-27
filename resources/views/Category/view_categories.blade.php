@extends('layout.layout')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-offset-1 col-md-10">
<div class="panel">
<div class="panel-heading"><h3 align="center">Categories</h3></div>
<div class="panel-body">



 <table class="table table-striped">
			 	<thead>
			      <tr>
			        <th>Id</th>
			        <th>Category Name</th>
			       
			         
			       
			      </tr>
    			</thead>

				@foreach($categories as $category)
				<tr>	
                 <td>
				  {{ $category->id }}
				 </td>
				
				 <td>
				  {{ $category->cat_name }}
				 </td>
				
				
				 
				 <td>
				<a class="btn btn-success" href="/category/{{ $category->id }}/edit">Edit<span 
				class="fa fa-edit">
				</span></a>
				</td>
				<td>
				<a class="btn btn-danger" href="/category/{{ $category->id }}/delete">Delete <span 
				class="fa fa-trash">
				</span></a>
				 </td>

				</tr>

				@endforeach
			
		    </table>
 

</div>
</div>
</div>
</div>
</div>




@endsection