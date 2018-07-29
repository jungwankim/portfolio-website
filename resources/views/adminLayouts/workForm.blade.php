@extends('adminLayouts.adminmaster')
@section('form')
	@if(isset($work->id))
	<form action="/admin/edit/works/{{$work->id}}" method="post" role="form">
		<h2>Edit Work Experience</h2>	
	@else
	<form action="/admin/form/work" method="post" role="form">
		<h2>Add Work Experience</h2>
	@endif
		@csrf
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Company Name</label>
					<input type="text" class="form-control" name="company_name" value="{{$work->company_name}}" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group" >
					<label for="">Position</label>
					<input type="text" class="form-control" name="position" value="{{$work->position}}" required="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group" >
					<label for="">Location</label>
					<input type="text" class="form-control" name="location" value="{{$work->location}}" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group" >
					<label for="">Starting Date</label>
					<input type="date" class="form-control" value="{{$work->starting_date}}" name="starting_date" >
				</div>
			</div>
			<div class="col-md-6">
				
				<div class="form-group" >
					<label for="">Ending Date</label>
					<input type="date" class="form-control" value="{{$work->ending_date}}" name="ending_date">
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
					<textarea name="description" class="form-control" rows="10" required="">{{$work->description}}</textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Related Skills</label>
					
					<input type="text" class="form-control" name="skills"
						value = "@foreach ($work->skills()->get() as $skill){{$skill->category}}{{'@'.$skill->name}},@endforeach">
				</div>
			</div>
		</div>
		<div class="form-group" >
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>

		
	</form>
@endsection