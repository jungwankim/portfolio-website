@extends('adminLayouts.adminmaster')
@section('form')
	@if(isset($skill->name))
	<form action="/admin/edit/skills/{{$skill->name}}" method="post" role="form">
		<h2>Edit Skill</h2>
		<ul class="list-group">
			<h3>related works</h3>
				@foreach($skill->works()->get() as $work)
					<li class="list-group-item">{{$work->company_name}} : {{$work->position}}</li>
				@endforeach
		</ul>

		<ul class="list-group">
			<h3>related projects</h3>
				@foreach($skill->projects()->get() as $project)
					<li class="list-group-item">{{$project->title}}</li>
				@endforeach
		</ul>
	@else
	<form action="/admin/form/skill" method="post" role="form">
		<h2>Add Skill</h2>
	@endif
		@csrf
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="category">Category</label>
					<input type="text" class="form-control" value="{{$skill->category}}" name="category" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="name">Skill Name</label>
					<input type="text" class="form-control" value="{{$skill->name}}" name="name" required="">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="form-group" >
					<label for="">visibility</label>
					<input type="checkbox" name="visible" value="1" @if($skill->visible) checked @endif>
				</div>
			</div>
		</div>



		<div class="form-group" >
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
@endsection