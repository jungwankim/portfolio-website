@extends('adminLayouts.adminmaster')
@section('form')
<div class="container">
	<form action="/admin/form/skill" method="post" role="form">
		@csrf
		<h2>Add Skill</h2>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Category</label>
					<input type="text" class="form-control" name="category" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Skill Name</label>
					<input type="text" class="form-control" name="name" required="">
				</div>
			</div>
		</div>
		<div class="form-group" >
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
@endsection