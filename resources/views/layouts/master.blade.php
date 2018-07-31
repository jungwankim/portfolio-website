<!DOCTYPE html>
<html lang="en">
	<head>
		@include('layouts.head')
		
	</head>
	<body>
		@if (Auth::user())
		@include('adminLayouts.adminNav')
		@endif
		<div class="site">
			@yield('content')
		</div>
		@include('layouts.footer')


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		@yield('script')

	</body>
</html>