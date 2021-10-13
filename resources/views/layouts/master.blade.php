<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Admin Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		
		@include('partials.navigation')
		
		<div class="main">
			
			@include('partials.topbar')
			@include('partials.cardbox')

			<div class="details">
				@yield('content')
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		function toggleMenu(){
			let navigation = document.querySelector('.navigation');
			let toggle = document.querySelector('.toggle');
			let main = document.querySelector('.main');
			navigation.classList.toggle('active');
			toggle.classList.toggle('active');
			main.classList.toggle('active');
		}
	</script>
</body>
</html>
