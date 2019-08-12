<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

		<!-- Styles -->
		<style>
			html, body {
				background-color: #fff;
				color: #636b6f;
				font-family: 'Nunito', sans-serif;
				font-weight: 200;
				height: 100vh;
				margin: 0;
			}

			.full-height {
				height: 100vh;
			}

			.flex-center {
				align-items: center;
				display: flex;
				justify-content: center;
			}

			.position-ref {
				position: relative;
			}

			.top-right {
				position: absolute;
				right: 10px;
				top: 18px;
			}

			.content {
				text-align: center;
			}

			.title {
				font-size: 84px;
			}

			.links > a {
				color: #636b6f;
				padding: 0 25px;
				font-size: 13px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
			}

			.m-b-md {
				margin-bottom: 30px;
			}
		</style>
		<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-mtS696VnV9qeIoC8w/PrPoRzJ5gwydRVn0oQ9b+RJOPxE1Z1jXuuJcyeNxvNZhdx" crossorigin="anonymous">
	</head>
	<body>
		<div class="flex-center position-ref full-height">
			@if (Route::has('login'))
				<div class="top-right links">
					@auth
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ route('login') }}">Login</a>

						@if (Route::has('register'))
							<a href="{{ route('register') }}">Register</a>
						@endif
					@endauth
				</div>
			@endif

			<div class="content">
				<div class="title m-b-md">
					HV APP
				</div>

				<div class="links">
					@if (Route::has('login'))
					@auth
						<a href="{{ url('/home') }}">Home</a>
						<a href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
					@else
						<a href="{{ route('login') }}">Login</a>

						@if (Route::has('register'))
							<a href="{{ route('register') }}">Register</a>
						@endif
					@endauth
				@endif
				@if (Session::has('msg'))
					<p>{!! Session::get('msg') !!}</p>
				@endif
				</div>
			</div>


		</div>
		<div class="container">

		</div>
	</body>
</html>
