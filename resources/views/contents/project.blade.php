@extends('layouts.master')

@section('content')

	@include('layouts.navigation')
	<div class="jumbotron mb-0">
		<h1 class="display-3 mt-5">My Projects</h1>
		<p class="lead">You can check my personal, class, and work projects in here.</p>
	</div>
	<div class="thumbnail-nav mb-5">
		<div class="thumbnail-container">
			<ul>
				@php
					$index = $project->id;
				@endphp
				@foreach($projects as $proj)
					<li class="thumnail-img">
						<span class="thumbnail-title">{{$proj->short_name}}</span>

						@if($index == $proj->id)
							<a href="/projects/project/{{$proj->id}}" class="item-link active" dataset="project" title="">
{{-- 								<img src="/images/education.jpg" alt=""> 
 --}}							</a>
						@else
							<a href="/projects/project/{{$proj->id}}" class="item-link" dataset="project" title="">
{{-- 								<img src="/images/education.jpg" alt=""> 
 --}}							</a>
						@endif
					</li>
				@endforeach
			</ul>
		</div>
	</div>

	<div class="d-flex justify-content-center mb-5">
		<div class="card col-md-8">
		  <div class="card-body">
		  	<h1 class="title card-title text-center text-capitalize">{{$project->title}}</h1>
		  	<h3 class="subtitle mb-2 text-center text-muted">{{$project->subtitle}}</h3>
		  	<div class="col-6">
				<div class="starting">{{$project->starting_date}}</div>
			</div>
			<div class="col-6">
				<div class="ending">{{$project->ending_date}}</div>
			</div>
		    <div class="col-12">
				<div class="description">{!! $project->description !!}</div>
			</div>
			<div class="col-12 text-center">
				<div class="url card-link">
					{{$project->url}}
				</div>
		 	 </div>
			</div>
		</div>
	</div>

@endsection

@section('script')
	<script src="/js/app.js"></script>
	<script src="/js/nav.js"></script>
@endsection