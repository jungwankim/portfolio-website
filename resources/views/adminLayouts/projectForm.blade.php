@extends('adminLayouts.adminmaster')
@section('form')
<div class="container">
	<form action="/admin/form/project" method="post" role="form">
		@csrf
		<h2>Add Project Experience</h2>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Title</label>
					<input type="text" class="form-control" name="title" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">SubTitle</label>
					<input type="text" class="form-control" name="subtitle" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group" >
					<label for="">Starting Date - Nullable</label>
					<input type="date" class="form-control" name="starting_date" >
				</div>
			</div>
			<div class="col-md-6">
				
				<div class="form-group" >
					<label for="">Ending Date - Nullable</label>
					<input type="date" class="form-control" name="ending_date">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">URL - Nullable</label>
					<input type="text" name="url" class="form-control" >
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Description</label>
					<textarea name="description" class="form-control" rows="10" required=""></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Related Skills</label>
					<input type="text" class="form-control" name="skills">
				</div>
			</div>
		</div>
		<div class="form-group" >
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>

		
	</form>
</div>
@endsection