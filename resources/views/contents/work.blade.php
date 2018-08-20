@extends('layouts.master')

@section('content')

	@include('layouts.navigation')
	<div class="jumbotron mb-0">
		<h1 class="display-3 mt-5">My Work Experiences</h1>
		<p class="lead">You can check my work path in here.</p>
	</div>
	<div class="thumbnail-nav mb-5">
		<div class="thumbnail-container">
			<ul>
				@php
					$index = $work->id;
				@endphp
				@foreach($works as $wk)
					<li class="thumnail-img">
						<span class="thumbnail-title">{{$wk->short_name}}</span>

						@if($index == $wk->id)
							<a href="/works/work/{{$wk->id}}" class="item-link active" dataset="work" title="">
{{-- 								<img src="/images/education.jpg" alt=""> 
 --}}							</a>
						@else
							<a href="/works/work/{{$wk->id}}" class="item-link" dataset="work" title="">
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
			  	<h1 class="company_name card-title text-left text-capitalize">{{$work->company_name}}</h1>
			  	<h3 class="position mb-2 text-left text-muted">{{$work->position}}</h3>
			  	<h3 class="location mb-2 text-left text-muted">{{$work->location}}</h3>
			  	<div class="text-left text-muted mb-5">
			  		<div class="">
						<div class="starting">
							{{ \Carbon\Carbon::parse($work->starting_date)->format('F Y')}} 
							~ 
							{{ \Carbon\Carbon::parse($work->ending_date)->format('F Y')}}
						</div>
					</div>
			  	</div>
			  	<div class="related-skills text-left text-indent mb-5 d-flex flex-wrap">
			  		@foreach($work->skills()->get() as $skill)
			  			<a class="skill-tag" href="/skills/{{$skill->name}}" title="{{$skill->name}}">{{$skill->name}}</a>
			  		@endforeach
				</div>
			  
			    <div class="col-12 mb-5">
					<div class="description">
						{!! $work->description !!}
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