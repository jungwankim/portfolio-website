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
						<span class="thumbnail-title">{{$wk->company_name}}</span>

						@if($index == $wk->id)
							<a href="/works/work/{{$wk->id}}" class="item-link active" dataset="work" title="">
								<img src="/images/education.jpg" alt=""> 
							</a>
						@else
							<a href="/works/work/{{$wk->id}}" class="item-link" dataset="work" title="">
								<img src="/images/education.jpg" alt=""> 
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
			  	<h1 class="company_name card-title text-center text-capitalize">{{$work->company_name}}</h1>
			  	<h3 class="position mb-2 text-center text-muted">{{$work->position}}</h3>
			  	<h3 class="location mb-2 text-center text-muted">{{$work->location}}</h3>

			  	<div class="col-6">
					<div class="starting">{{$work->starting_date}}</div>
				</div>
				<div class="col-6">
					<div class="ending">{{$work->ending_date}}</div>
				</div>
			    <div class="col-12">
					<pre class="description">{{$work->description}}</pre>
				</div>
		 	</div>
		</div>
	</div>

@endsection

@section('script')
	<script src="/js/app.js"></script>
	<script src="/js/nav.js"></script>
@endsection