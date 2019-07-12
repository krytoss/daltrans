@extends('layout')

@section('title', 'Domov')

@section('content')

	<section id="quote-section" class="section">

		<div class="container">
		
			<!-- <div class="row">
			
				<div class="col-md col-md-6">

					<div class="row">
						<div class="col-md col-md-4">
							<input placeholder="lokalita z" type="" name="" class="form-control">
						</div>
						<div class="col-md col-md-4">
							<input placeholder="lokalita do" type="" name="" class="form-control">
						</div>
						<div class="col-md col-md-4">
							<input placeholder="náklad" type="" name="" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md col-md-4">
							<input type="" placeholder="e-mail" class="form-control">
						</div>
						<div class="col-md col-md-4">
							<input type="" placeholder="telefón" class="form-control">
						</div>
						<div class="col-md col-md-4">
							<input class="btn btn-success" type="submit" value="Odoslať" style="width: 100%">
						</div>
					</div>

				</div>
				<div class="col-md col-md-6">
					<div class="row">
						<div class="col-md col-md-5">
							<img src="{{ asset('img/kamion.jpg') }}" class="img-cover" height="104px">
						</div>
						<div class="col-md col-md-7">
							<h3>Požiadajte o cenovú ponuku</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis.</p>
						</div>
					</div>
				</div>

			</div> -->

			<div class="row small-images">
				<div class="col col-md-4 col-12">
					<img src="{{ asset('img/driver-ready.jpg') }}" class="img-cover small-img">
					<h3>Váš tovar, naša cesta</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis.
					</p>
				</div>
				<div class="col col-md-4 col-12">
					<img src="{{ asset('img/kamion.jpg') }}" class="img-cover small-img">
					<h3>Lorem ipsum</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis.
					</p>
				</div>
				<div class="col col-md-4 col-12">
					<img src="{{ asset('img/trucks.jpg') }}" class="img-cover small-img">
					<h3>Lorem ipsum</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis.
					</p>
				</div>
			</div>

		</div>

	</section>

	<section id="icons" class="dark">

		<div class="container">

		    <div class="row">
		      	<div class="col col-md-4 col-sm-4 col-12">
		      		<i class="fas fa-user-shield fa-5x"></i>
		      		<p>
		      			V našom tíme máme profesionálov s dlhoročnými skúsenosťami v oblasti logistiky
		      		</p>
		      	</div>
		      	<div class="col col-md-4 col-sm-4 col-12">
		      		<i class="fas fa-hand-holding-usd fa-5x"></i>
		      		<p>
		      			Minimalizujeme Vaše náklady
		      		</p>
		      	</div>
		      	<div class="col col-md-4 col-sm-4 col-12">
		      		<i class="fas fa-shipping-fast fa-5x"></i>
		      		<p>
		      			Váš tovar prepravíme rýchlo a bezpečne
		      		</p>
		      	</div>
		    </div>

		    <div class="spacer"></div>
		    <div class="spacer"></div>

		    <div class="row">
		      	<div class="col col-md-4 col-sm-4 col-12">
		      		<i class="fas fa-globe fa-5x"></i>
		      		<p>
		      			Zabezpečujeme prepravu do EÚ a celého sveta
		      		</p>
		      	</div>
		      	<div class="col col-md-4 col-sm-4 col-12">
		      		<i class="fas fa-handshake fa-5x"></i>
		      		<p>
		      			Individuálne pristupujeme ku každému klientovi
		      		</p>
		      	</div>
		      	<div class="col col-md-4 col-sm-4 col-12">
		      		<i class="fas fa-dolly-flatbed fa-5x"></i>
		      		<p>
		      			Venujeme sa medzinárodnej kamiónovej, námornej a leteckej doprave, prepravným a 	špedičným službám
		      		</p>
		      	</div>
		    </div>

		</div>

	</section>

	<section id="about" class="clearfix">
		
		<div class="container">
			<h2>O firme</h2>
			<div class="row">
				<div class="col col-md-8 col-12">
					<p>
						Sme špedičná firma ktorá  sa zaoberá expresnou prepravou tovaru na všetkých typoch vozidiel po celom svete. Ponúkame komplexné portfólio celosvetových prepravných  a logistických služieb.
					</p>
					<p>
						Naši zamestnanci sú profesionáli  s dlhoročnými skúsenosťami vo svojom obore. Snažíme sa vyhovieť náročným požiadavkám našich klientov  a vždy zabezpečiť hladký priebeh transportu. 
						Máme radi moderné a inovatívne riešenia, konáme rýchlo a zodpovedne.
					</p>
					<p>
						Našim cieľom je  Vaša spokojnosť.
					</p>
				</div>
				<div class="col col-md-4 col-12">
					<img src="{{ asset('img/trucks.jpg') }}" class="img-cover">
				</div>
			</div>
		</div>

	</section>

	<section id="services" class="dark">
		
		<div class="container">

			<h2>Služby</h2>

			<div class="row">
				<div class="col col-md-6 col-12">
					<h3 class="subtitle">Bežná preprava</h3>
					<ul>
						<li>
							rôzne alternatívy prepráv, FTL/LTL 
						</li>
						<li>
							preprava na všetkých typoch vozidiel
						</li>
						<li>
							preprava tovaru v rámci EÚ a celého sveta
						</li>
					</ul>
				</div>
				<div class="mobile-spacer"></div>
				<div class="mobile-spacer"></div>
				<div class="col col-md-6 col-12">
					<h3 class="subtitle">Expresná preprava</h3>
					<ul>
						<li>expresné doručenie zásielok</li>
						<li>individuálne nastavenie ceny podľa požiadavok zákazníka</li>
					</ul>
				</div>
			</div>

			<div class="spacer"></div>

			<h3 class="subtitle">Naceniť prepravu</h3>

			<div class="row">
				
				<div class="col col-md-12">
					<form method="post" action="sendQueryForm">
						{{ csrf_field() }}
						<div class="row text-center">
							<div class="col col-md-4 col-md-offset-2 col-12 col-offset-0">
								<div class="form-check form-check-inline">
								 	<input class="form-check-input" type="radio" name="type" id="standard" value="standard">
								 	<label class="form-check-label" for="standard">Bežná preprava</label>
								</div>
							</div>
							<div class="col col-md-4 col-12">
								<div class="form-check form-check-inline">
								 	<input class="form-check-input" type="radio" name="type" id="express" value="express">
								 	<label class="form-check-label" for="express">Expresná preprava</label>
								</div>
							</div>
						</div>
						<div class="spacer"></div>
						<div class="row">
							<div class="col col-md-4 col-12">
								<input placeholder="lokalita z" type="" name="from" class="form-control">
							</div>
							<div class="col col-md-4 col-12">
								<input placeholder="lokalita do" type="" name="to" class="form-control">
							</div>
							<div class="col col-md-4 col-12">
								<input placeholder="náklad" type="" name="cargo" class="form-control">
							</div>
						</div>
						<div class="spacer"></div>
						<div class="row">
							<div class="col col-md-4 col-12">
								<input type="" name="mail" placeholder="e-mail" class="form-control">
							</div>
							<div class="col col-md-4 col-12">
								<input type="" name="tel" placeholder="telefón" class="form-control">
							</div>
							<div class="col col-md-4 col-12">
								<input class="btn btn-success" type="submit" value="Odoslať" style="width: 100%">
							</div>
						</div>
					</form>

				</div>

			</div>
			
		</div>

	</section>

	<section id="contact">

		<div class="container">
			
			<h2>Kontakt</h2>
			
			<div class="row">
				<div class="col col-md-6 col-12">
					<ul class="nav">
							<li>
								<i class="fas fa-mobile-alt"></i>Telefón: <a href="tel:+421999999999">+421 999 999 999</a>
							</li>
							<li><div class="spacer"></div></li>
							<li>
								<i class="fas fa-envelope"></i>Email: <a href="mailto:a@a.a">email@daltrans.sk</a>
							</li>
							<li><div class="spacer"></div></li>
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
								<strong>DIČ:</strong> 52157024
							</li>
					</ul>
				</div>
				<div class="col col-md-6 col-12">
					<form method="post" action="sendContactForm">
						{{ csrf_field() }}
						<div class="row">
							<div class="col col-md-12">
								<input placeholder="Meno" type="" name="name" class="form-control">
							</div>
						</div>
						<div class="spacer"></div>
						<div class="row">
							<div class="col col-md-12">
								<input placeholder="Telefón" type="" name="tel" class="form-control">
							</div>
						</div>
						<div class="spacer"></div>
						<div class="row">
							<div class="col col-md-12">
								<input placeholder="E-mail" type="" name="mail" class="form-control">
							</div>
						</div>
						<div class="spacer"></div>
						<div class="row">
							<div class="col col-md-12">
								<textarea class="form-control" name="msg" rows=4 placeholder="Vaša správa"></textarea>
							</div>
						</div>
						<div class="spacer"></div>
						<div class="row">
							<div class="col col-md-4 col-md-offset-4 text-center">
								<input class="btn btn-success" type="submit" value="Odoslať" style="width: 100%">
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

	</section>

	<section id="map">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Hlavn%C3%A1%2045%2F26%20966%2053%20Hronsk%C3%BD%20Be%C5%88adik&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div>
	</section>

@endsection