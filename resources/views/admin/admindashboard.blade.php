@extends('template')

@section('pagetitle', 'Dashboard')

@section('admin_body')

	<div class="container">
		<div class="row">
			<div class="card col-3">
				<div class="card-body">
					<h3 class="card-title">Products</h3>
					<h4 class="card-text">200</h4>
				</div>
			</div>
			<div class="card col-3">
				<div class="card-body">
					<h3 class="card-title">Reviews</h3>
					<h4 class="card-text">2,000</h4>
				</div>
			</div>
			<div class="card col-3">
				<div class="card-body">
					<h3 class="card-title">Users</h3>
					<h4 class="card-text">300</h4>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
			@if($errors->any())
				<ul class="list-unstyled">
					@foreach($errors->all() as $error)
					<li>
						<div class="alert alert-danger">{{$error}}</div>
					</li>
					@endforeach
				</ul>	
			@endif
			<h2>Add Book</h2>
				<!-- <form method="POST" action="/addbook" enctype=",ultipart/form-data"> -->
				<!-- {{ csrf_field() }} -->
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" id="title" class="form-control"></input>
				</div>
				<div class="form-group">
					<label>Summary</label>
					<textarea type="text" name="summary" id="summary" class="form-control"></textarea>
				</div>
				
				<div class="form-group">
					<label>Category</label>
					<select id="category" name="category" class="form-control">
					@foreach($categories as $category)
						<option value="{{ $category->id }}"> {{ $category->name }}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<button id="createBook" class="btn btn-primary form-control">Save</button>
				</div>

				<div class="form-group">
					<label>Image</label>
					<input type="file" name="image_cover" class="form-control"></input>
				</div>
				
				<!-- </form> -->
				<a href="/mailtesting" class="btn btn-success">mail testing</a>
			</div>
		</div>
	</div>


@endsection