<!DOCTYPE html>
<html>
<head>
	<title>Daltrans - @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i&display=swap&subset=latin-ext" rel="stylesheet">
</head>
<body>

	<div class="loading">
		<svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
			<path fill="#adadad" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
			  c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
			<animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="2s" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
			</path>
			<path fill="#adadad" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
			  c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
			<animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="-360 50 50" repeatCount="indefinite"></animateTransform>
			</path>
			<path fill="#adadad" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
			  L82,35.7z">
			<animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="2s" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
			</path>
		</svg>
	</div>

	<header>
		
		<div id="header-top">

			<div class="row" style="height: inherit;">
				
				<div class="col col-md-3">
					<img src="{{ asset('img/logo.png') }}" id="logo">
				</div>

				<div class="col col-md-9">
					<ul id="main-nav" class="vertical-nav">
						<li>
							<a href="#" class="active">Domov</a>
						</li>
						<li>
							<a href="#">bla bla</a>
						</li>
						<li>
							<a href="#">bla bla</a>
						</li>
						<li>
							<a href="#">bla bla</a>
						</li>
					</ul>
				</div>

			</div>

		</div>

		<div id="slider">
			
			<div class="slide slide-fade">
				<img src="{{ asset('img/header01.jpg') }}">
			</div>
			<div class="slide slide-fade">
				<img src="{{ asset('img/header02.jpg') }}">
			</div>

			<a class="arrow arrow-left">&#10094;</a>
			<a class="arrow arrow-right">&#10095;</a>

		</div>

	</header>

	<main>
		
		@yield('content')

	</main>

	<footer>
		
	</footer>

	<script   src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>