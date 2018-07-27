<!DOCTYPE html>
<html>
<head>
	<title>administration page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/app.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	@include('adminLayouts.adminNav')
	@if(Session::has('successMsg'))
		<div class="alert alert-success">
			<p> saved </p>
		</div>
	@endif
	<div class="container">
		@if(Auth::guest())
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Log In</h3>
			</div>
			<div class="panel-body">
				@yield('content')
			</div>
		</div>
		@endif

		@yield('form')

		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	</div>
</body>
</html>