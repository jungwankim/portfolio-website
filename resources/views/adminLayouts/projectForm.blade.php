@extends('adminLayouts.adminmaster')
@section('form')
	@if(isset($project->id))
	<form action="/admin/edit/projects/{{$project->id}}" method="post" role="form">
		<h2>Edit Project Experience</h2>	
	@else
	<form action="/admin/form/project" method="post" role="form">
		<h2>Add Project Experience</h2>
	@endif
		@csrf
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Title</label>
					<input type="text" class="form-control" name="title" value="{{$project->title}}" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Short Name for Nav</label>
					<input type="text" class="form-control" name="short_name" value="{{$project->short_name}}" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">SubTitle</label>
					<input type="text" class="form-control" name="subtitle" value="{{$project->subtitle}}" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group" >
					<label for="">Starting Date - Nullable</label>
					<input type="date" class="form-control" name="starting_date" value="{{$project->starting_date}}">
				</div>
			</div>
			<div class="col-md-6">
				
				<div class="form-group" >
					<label for="">Ending Date - Nullable</label>
					<input type="date" class="form-control" value="{{$project->ending_date}}" name="ending_date">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">URL - Nullable</label>
					<input type="text" name="url" value="{{$project->url}}" class="form-control" >
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Description</label>
					<textarea name="description" class="form-control" rows="10" required="">{{$project->description}}</textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">Related Skills</label>
					<input type="text" class="form-control" name="skills" value = "@foreach ($project->skills()->get() as $skill){{$skill->category}}{{'@'.$skill->name}},@endforeach">
				</div>
			</div>
		</div>
		<div class="form-group" >
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>

		
	</form>
@endsection