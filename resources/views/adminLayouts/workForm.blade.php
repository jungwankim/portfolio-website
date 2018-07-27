@extends('adminLayouts.adminmaster')
@section('form')
<div class="container">
	<form action="/admin/form/work" method="post" role="form">
		@csrf
		<h2>Add Work Experience</h2>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Company Name</label>
					<input type="text" class="form-control" name="company_name" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group" >
					<label for="">Position</label>
					<input type="text" class="form-control" name="position" required="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group" >
					<label for="">Location</label>
					<input type="text" class="form-control" name="location" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group" >
					<label for="">Starting Date</label>
					<input type="date" class="form-control" name="starting_date" >
				</div>
			</div>
			<div class="col-md-6">
				
				<div class="form-group" >
					<label for="">Ending Date</label>
					<input type="date" class="form-control" name="ending_date">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Current Job</label>
					<input type="radio" name="current_job" value="1">
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