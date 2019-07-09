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
				<div class="col col-md-4">
					<img src="{{ asset('img/driver-ready.jpg') }}" class="img-cover small-img">
					<h3>Lorem ipsum</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis.
					</p>
				</div>
				<div class="col col-md-4">
					<img src="{{ asset('img/kamion.jpg') }}" class="img-cover small-img">
					<h3>Lorem ipsum</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis.
					</p>
				</div>
				<div class="col col-md-4">
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
		      	<div class="col col-md-4">
		      		<i class="fas fa-user-shield fa-5x"></i>
		      		<p>
		      			V našom tíme máme profesionálov s dlhoročnými skúsenosťami v oblasti logistiky
		      		</p>
		      	</div>
		      	<div class="col col-md-4">
		      		<i class="fas fa-hand-holding-usd fa-5x"></i>
		      		<p>
		      			Minimalizujeme Vaše náklady
		      		</p>
		      	</div>
		      	<div class="col col-md-4">
		      		<i class="fas fa-shipping-fast fa-5x"></i>
		      		<p>
		      			Váš tovar prepravíme rýchlo a bezpečne
		      		</p>
		      	</div>
		    </div>

		    <div class="spacer"></div>
		    <div class="spacer"></div>

		    <div class="row">
		      	<div class="col col-md-4">
		      		<i class="fas fa-globe fa-5x"></i>
		      		<p>
		      			Zabezpečujeme prepravu do EÚ a celého sveta
		      		</p>
		      	</div>
		      	<div class="col col-md-4">
		      		<i class="fas fa-handshake fa-5x"></i>
		      		<p>
		      			Individuálne pristupujeme ku každému klientovi
		      		</p>
		      	</div>
		      	<div class="col col-md-4">
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
				<div class="col col-md-8">
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
				<div class="col col-md-4">
					<img src="{{ asset('img/trucks.jpg') }}" class="img-cover">
				</div>
			</div>
		</div>

	</section>

	<section id="services" class="dark">
		
		<div class="container">

			<h2>Služby</h2>

			<div class="row">
				<div class="col col-md-6">
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
				<div class="col col-md-6">
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
					<div class="spacer"></div>
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

			</div>
			
		</div>

	</section>

	<section id="contact">

		<div class="container">
			
			<h2>Kontakt</h2>
			
			<div class="row">
				<div class="col col-md-6">
					<ul class="nav">
							<li>
								<i class="fas fa-mobile-alt"></i>Telefón: <a href="tel:+421999999999">+421 999 999 999</a>
							</li>
							<li>
								<i class="fas fa-envelope"></i>Email: <a href="mailto:a@a.a">email@daltrans.sk</a>
							</li>
					</ul>
				</div>
				<div class="col col-md-6">
					<div class="row">
						<div class="col col-md-12">
							<input placeholder="Meno" type="" name="" class="form-control">
						</div>
					</div>
					<div class="spacer"></div>
					<div class="row">
						<div class="col col-md-12">
							<input placeholder="Telefón" type="" name="" class="form-control">
						</div>
					</div>
					<div class="spacer"></div>
					<div class="row">
						<div class="col col-md-12">
							<input placeholder="E-mail" type="" name="" class="form-control">
						</div>
					</div>
					<div class="spacer"></div>
					<div class="row">
						<div class="col col-md-12">
							<textarea class="form-control" rows=4></textarea>
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>

	<section id="map">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Hlavn%C3%A1%2045%2F26%20966%2053%20Hronsk%C3%BD%20Be%C5%88adik&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div>
	</section>

@endsection