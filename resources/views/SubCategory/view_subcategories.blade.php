@extends('layout.adminlayout')

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
			        <th>Sub Category Name</th>
			       
			         
			       
			      </tr>
    			</thead>

				@foreach($subcategories as $subcategory)
				<tr>	
                 <td>
				  {{ $subcategory->id }}
				 </td>
				
				 <td>
				  {{ $subcategory->name }}
				 </td>
				
				
				 
				 <td>
				<a class="btn btn-success" href="/subcategory/{{ $subcategory->id }}/edit">Edit<span 
				class="fa fa-edit">
				</span></a>
				</td>
				<td>
				<a class="btn btn-danger" href="/subcategory/{{ $subcategory->id }}/delete">Delete <span 
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