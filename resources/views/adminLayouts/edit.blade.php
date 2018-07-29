@extends('adminLayouts.adminmaster')
@section('editList')


<h1>Skills</h1>
<div class="list-group">
	@foreach ($skills as $skill)
	<p class="list-group-item">
		{{$skill->category}} : {{$skill->name}}
		<a href="/admin/delete/skills/{{$skill->name}}" class="pull-right"> delete</a>
		<span class="pull-right p-4"> | </span>
		<a href="/admin/edit/skills/{{$skill->name}}" class="pull-right">edit </a>
	</p>
	@endforeach
</div>


<h1>Works</h1>
<div class="list-group">
	@foreach ($works as $work)
	<p class="list-group-item">
		{{$work->company_name}} : {{$work->position}}
		<a href="/admin/delete/works/{{$work->id}}" class="pull-right"> delete</a>
		<span class="pull-right p-4"> | </span>
		<a href="/admin/edit/works/{{$work->id}}" class="pull-right">edit </a>
	</p>
	@endforeach
</div>


<h1>Projects</h1>
<div class="list-group">
	@foreach ($projects as $project)
	<p class="list-group-item">
		{{$project->title}}
		<a href="/admin/delete/projects/{{$project->id}}" class="pull-right"> delete</a>
		<span class="pull-right p-4"> | </span>
		<a href="/admin/edit/projects/{{$project->id}}" class="pull-right">edit </a>
	</p>
	@endforeach
</div>


@endsection