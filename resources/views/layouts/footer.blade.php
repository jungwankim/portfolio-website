<div class="jumbotron footer mb-0">
	<div class="container">
		<h3 class="mt-0">Quick Navigation</h3>
		<div class="row">
			<div class="col-sm-6">
				<h4>Skills</h4>
				<div class="row">
					<div class="col-sm-12">
					@foreach($skills as $skill)
						<div class="fluid">
							<a href="/skills/{{$skill->name}}" title="{{$skill->name}}"><p>{{$skill->name}}, </p></a>
						</div>
					@endforeach
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<h4>Projects</h4>
				<div class="row">
					<div class="col-sm-12">
					@foreach($projects as $project)
						<div class="fluid">
							<a href="/projects/{{$project->id}}" title="{{$project->title}}"><p>{{$project->title}}, </p></a>
						</div>
					@endforeach

					</div>
				</div>

				<h4>Works</h4>
				<div class="row">
					<div class="col-sm-12">
					@foreach($works as $work)
						<div class="fluid">
							<a href="/works/{{$work->id}}" title="{{$work->position}}"><p>{{$work->position}}, </p></a>
						</div>
					@endforeach

					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="row text-center mt-5 social mb-3">

		<a href="https://www.linkedin.com/in/jungwan-kim-14790688/" class="fa fa-linkedin"></a>

		<a href="https://twitter.com/jkwan44267954" class="fa fa-twitter"></a>

		<a href="https://github.com/jungwankim" class="fa fa-github"></a>
	</div>
</div>

<div class="copyright text-center">
	<p class="mb-0">Copyright &copy; 2018 by Jungwan</p>
</div>