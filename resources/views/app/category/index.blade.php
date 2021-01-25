@extends('layouts.app')
@section('subheader')
	<div class="c-subheader px-3">
	  <!-- Breadcrumb-->
	  <ol class="breadcrumb border-0 m-0">
	    <li class="breadcrumb-item">Home</li>
	    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-dark">Admin</a></li>
	    <li class="breadcrumb-item active">Category</li>
	    <!-- Breadcrumb Menu-->
	  </ol>
	</div>
@endsection


@section('content')
	

    		<div class="d-flex justify-content-between mb-3">
    			<div>
	 				<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal">Create Category</button>

	 				 
	 			</div>

	 			<div>
	 				All Category
	 			</div>
    		</div>

		 	<div class="row">
	            <div class="col-sm-12 col-xl-12 ">
		            <div class="card">
		               <div class="card-body">
		               		<table class="table">
			                	<thead>
			                		<tr>
			                			<td>No.</td>
			                			<td>Name</td>
			                			<td>Slug</td>
			                			<td>Parent</td>
			                			<td>Icon</td>
			                			<td>Action</td>
			                		</tr>
			                	</thead>
			                	<tbody>
			                		@forelse($categories as $category)
			                		<tr>
			                			<td>{{ $loop->iteration }}</td>
			                			<td>{{ $category->name }}</td>
			                			<td>{{ $category->slug }}</td>
			                			<td>Parent</td>
			                			<td><img src="{{ asset("/storage/".$category->icon) }}" width="15"></td>
			                			<td>
			                				

			                			</td>
			                		</tr>

			                		@empty
			                		<tr>
			                			<td colspan="6" align="center">Tidak Ada Data</td>
			                		</tr>

			                		@endforelse
			                	</tbody>
		                	</table>

		                	{{ $categories->links() }}
		               </div>
		                
		            </div>
	            </div>
	        </div>
   	 	

 <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-success" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create Category</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
           		<form class="form-horizontal"  method="post" action="{{  route('category.store') }}" enctype="multipart/form-data">
           			@csrf
           			 <div class="form-group row">
           				<label for="name" class="col-md-1 col-form-label">Name</label>
           				 <div class="col-md-11">
           				<input type="text" class="form-control" name="name" id="name" autocomplete="off">
           			</div>
           			</div>

           			 <div class="form-group row">
           				<label for="name" class="col-md-1 col-form-label">Icon</label>
           				 <div class="col-md-11">
           				<input type="file"  name="icon" id="icon" autocomplete="off">
           			</div>
           			</div>


           			 <div class="form-group row">
           				<label for="name" class="col-md-1 col-form-label">Parent</label>
           				 <div class="col-md-11">
           				<select class="form-control" name="parentid" id="parentid">
           					<option value="0">Parent</option>
           					@foreach($categories as $category)
           						<option value="{{ $category->id }}">{{ $category->name }}</option>
           					@endforeach
           				</select>
           			</div>
           			</div>
           		
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit">Save</button>
          </div>

          </form>
        </div>
        <!-- /.modal-content-->
      </div>
      <!-- /.modal-dialog-->
    </div>



@endsection
