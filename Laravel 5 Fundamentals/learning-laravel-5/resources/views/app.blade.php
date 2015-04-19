<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!-- @include('partials.flash') lets just use the package's partial view-->
		@include('flash::message')

		@yield('content')
	</div>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script>
		$('div.alert').not('.alert-important').delay(3000).slideUp(300);
	</script>

	@yield('footer')
</body>
</html>