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


		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>		
		@yield('script')

	</body>
</html>