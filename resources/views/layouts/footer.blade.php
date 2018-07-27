<div class="jumbotron bg-dark footer mb-0">
	<div class="container">
		<h3 class="mt-0">Quick Navigation</h3>
		<div class="row">
			<div class="col-sm-6">
				<h4>Skills</h4>
				<div class="row">
					@foreach($skills as $skill)
						<div class="fluid">
							<a href="" title=""><p>{{$skill->name}}, </p></a>
						</div>
					@endforeach
				</div>
			</div>
			<div class="col-sm-6">
				<h4>Projects</h4>
				<div class="row">
					<div class="col-sm-12">
					@foreach($projects as $project)
						<div class="fluid">
							<a href="" title=""><p>{{$project->title}}, </p></a>
						</div>
					@endforeach

					</div>
				</div>

				<h4>Works</h4>
				<div class="row">
					<div class="col-sm-12">
					@foreach($works as $work)
						<div class="fluid">
							<a href="" title=""><p>{{$work->position}}, </p></a>
						</div>
					@endforeach

					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="row text-center mt-5 social">

		<a href="#" class="fa fa-linkedin"></a>

		<a href="#" class="fa fa-twitter"></a>

		<a href="#" class="fa fa-github"></a>
	</div>
</div>

<div class="copyright text-center">
	<p class="mb-0">Copyright &copy; 2018 by Jungwan</p>
</div>