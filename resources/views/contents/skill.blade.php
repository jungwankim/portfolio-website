@extends('layouts.master')

@section('content')
	@include('layouts.navigation')
	<div class="jumbotron mb-0">
		<h1 class="display-3 mt-5">My Skills</h1>
		<p class="lead">You can check my technical skills in here.</p>
	</div>
	<div class="thumbnail-nav mb-5">
		<div class="thumbnail-container">
			<ul>
				@php
					$index = $skill->name;
				@endphp
				@foreach($skills as $ski)
					<li class="thumnail-img">
						<span class="thumbnail-title">{{$ski->name}}</span>

						@if($index == $ski->name)
							<a href="/skills/skill/{{$ski->name}}" class="item-link active" category="{{$ski->category}}" dataset="skill" title="{{$ski->name}}">
								{{-- <img src="/images/education.jpg" alt="">  --}}
							</a>
						@else
							<a href="/skills/skill/{{$ski->name}}" class="item-link" category="{{$ski->category}}" dataset="skill" title="{{$ski->name}}">
								{{-- <img src="/images/education.jpg" alt="">  --}}
							</a>
						@endif
					</li>
				@endforeach
			</ul>
		</div>
	</div>

	<div class="searchbar mb-5">
		<form class=" col-10 col-md-8 d-flex justify-content-center mx-auto px-0" role="search">
			<div class="col-8 col-md-10 col-lg-10 px-0">
				<input id="search" type="text" class="form-control rounded-left" placeholder="Search" autocomplete="off">
			</div>
			
			<button type="submit" class="btn btn-primary col-4 col-sm-2 px-0">Search</button>
		</form>
		<div class="col-10 col-md-8 mx-auto px-0">
			<ul class="suggestion list-group">

			</ul>
		</div>
	</div>				

	<div class="d-flex justify-content-center mb-5">
		<div class="card col-md-8">
		  <div class="card-body">
		  	<div class="skill">
		  		<h1>{{$skill->name}}</h1>
		  	</div>
		  	<div class="works">
		  		@if($skill->works()->count() > 0) 
		  			<h3>Realted Works</h3>
		  			@foreach($skill->works()->get() as $work)
		  				<a href='/works/{{$work->id}}'>{{$work->company_name}}</a><br/>
		  			@endforeach
		  		@endif
		  	</div>
		  	<div class="projects">
		  		@if($skill->projects()->count() > 0) 
		  			<h3>Realted Projects</h3>
		  			@foreach($skill->projects()->get() as $project)
		  				<a href='/projects/{{$project->id}}'>{{$project->title}}</a><br/>
		  			@endforeach
		  		@endif
		  	</div>
		  </div>
		</div>
	</div>

@endsection

@section('script')
	<script src="/js/app.js"></script>
	<script src="/js/nav.js"></script>
@endsection