<!DOCTYPE html>
<html>
<head>
	<title>Daltrans - @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/fa.min.css') }}"> -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i&display=swap&subset=latin-ext" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="home">

	<div class="loading">
  <div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
</div>
		<!-- <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
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
		</svg> -->
	</div> 

	@if ($errors->any())
						<div id="errorModal" class="modal" tabindex="-1" role="dialog">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						        
							    <div class="alert alert-danger">
							        <ul>

							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
						      </div>
						    </div>
						  </div>
						</div>
					@endif

	<header>
		
		<div id="header-top" class="container-fluid">

			<div class="row" style="height: inherit;">
				
				<nav class="navbar navbar-expand-md navbar-dark">

					<a class="navbar-brand" href="#">
						<img src="{{ asset('img/logo.png') }}" id="logo">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="pull-right">
					    <span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarNav">

						<div class="nav-wrapper">
							<ul id="main-nav" class="nav vertical-nav">
								<li>
									<a href="#home" class="anchor active quote-section icons">Domov</a>
								</li>
								<li>
									<a href="#about" class="anchor about">O firme</a>
								</li>
								<li>
									<a href="#services" class="anchor services">Služby</a>
								</li>
								<li>
									<a href="#contact" class="anchor contact map">Kontakt</a>
								</li>
							</ul>
						</div>

					</div>

				</nav>

			</div>

		</div>

		<div id="slider" class="carousel slide" data-ride="carousel">

			<ul class="carousel-indicators">
			    <li data-target="#slider" data-slide-to="0" class="active"></li>
			    <li data-target="#slider" data-slide-to="1"></li>
			 </ul>

			<div class="carousel-inner">
				
				<div class="carousel-item active">
					<img src="{{ asset('img/header01.jpg') }}">
					<div class="carousel-caption">
				        <h3>Váš tovar, naša cesta</h3>
				    </div>
				</div>

				<div class="carousel-item">
					<img src="{{ asset('img/header02.jpg') }}">
				</div>

			</div>

			<a class="arrow arrow-left carousel-control-prev" href="#slider" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
		    	<span class="sr-only">Previous</span>
			</a>
			<a class="arrow arrow-right carousel-control-next" href="#slider" data-slide="next">
				<span class="carousel-control-next-icon"></span>
		    	<span class="sr-only">Next</span>
			</a>

		</div>

	</header>

	<main>
		
		@yield('content')

	</main>

	<footer id="main-footer">
		
		<div class="container">
			<div class="row">
				<div class="col col-md-3 col-12">
					<img src="{{ asset('img/logo.png') }}" style="width:100%;opacity:.9;">
				</div>
				<div id="footer-nav" class="col col-md-3 offset-md-2 offset-0 col-6">
					<h3>Navigácia</h3>
					<ul class="nav">
						<li><a href="#home" class="anchor">Domov</a></li>
						<li><a href="#about" class="anchor">O firme</a></li>
						<li><a href="#services" class="anchor">Služby</a></li>
						<li><a href="#contact" class="anchor">Kontakt</a></li>
					</ul>
				</div>
				<div id="footer-contact" class="col col-md-4 col-sm-6 col-12">
					<h3>Kontakt</h3>
					<ul class="nav">
						<li><i class="fas fa-mobile-alt"></i>Telefón: <a href="tel:+421999999999">+421 999 999 999</a></li>
						<li><i class="fas fa-envelope"></i>Email: <a href="mailto:a@a.a">logistika@daltrans.sk</a></li>
						<li>
							<i class="fas fa-map-marker-alt"></i>Hlavná 45/26
							<br><i></i>966 53 Hronský Beňadik
							<br><i></i>Slovensko
						</li>
						<li><div class="spacer"></div></li>
						<li>
							<strong>IČO:</strong> 52157024
						</li>
						<li>
							<strong>DIČ:</strong> 2120916457
						</li>
						<li>
							<strong>IČ DPH:</strong> SK2120916457
						</li>
					</ul>
				</div>
			</div>

		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col col-md-12">
						<p class="text-center">
							© 2019 Všetky práva vyhradené
						</p>
						<p class="text-center">
							Autor | Ľudovít Kopcsányi
						</p>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script type="text/javascript" 
           src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	<script src="https://kit.fontawesome.com/8d80d3b633.js"></script>
</body>
</html>