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
							<a href="/skills/skill/{{$ski->name}}" class="item-link active" dataset="skill" title="{{$ski->name}}">
								{{-- <img src="/images/education.jpg" alt="">  --}}
							</a>
						@else
							<a href="/skills/skill/{{$ski->name}}" class="item-link" dataset="skill" title="{{$ski->name}}">
								{{-- <img src="/images/education.jpg" alt="">  --}}
							</a>
						@endif
					</li>
				@endforeach
			</ul>
		</div>
	</div>

	<div class="d-flex justify-content-center mb-5">
		<div class="card col-md-8">
		  <div class="card-body">
		  	<div class="skill">
		  		
		  	</div>
		  	<div class="works">
		  		
		  	</div>
		  	<div class="projects">
		  		
		  	</div>
		  </div>
		</div>
	</div>

@endsection

@section('script')
	<script src="/js/app.js"></script>
	<script src="/js/nav.js"></script>
@endsection