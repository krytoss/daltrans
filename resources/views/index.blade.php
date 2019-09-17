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
					<div class="inside-column">
						<img src="{{ asset('img/driver-ready.jpg') }}" class="img-cover small-img">
						<div class="text">
							<p>
								Naši zamestnanci sú profesionáli  s dlhoročnými skúsenosťami vo svojom obore. Snažíme sa vyhovieť náročným požiadavkám našich klientov  a vždy zabezpečiť hladký priebeh transportu. 
								Máme radi moderné a inovatívne riešenia, konáme rýchlo a zodpovedne.
							</p>
						</div>
					</div>
				</div>
				<div class="col col-md-4 col-12">
					<div class="inside-column">
						<img src="{{ asset('img/kamion.jpg') }}" class="img-cover small-img">
						<div class="text">
							<p>
								Sme špedičná firma ktorá  sa zaoberá expresnou prepravou tovaru na všetkých typoch vozidiel po celom svete. Ponúkame komplexné portfólio celosvetových prepravných  a logistických služieb.
							</p>
						</div>
					</div>
				</div>
				<div class="col col-md-4 col-12">
					<div class="inside-column">
						<img src="{{ asset('img/trucks.jpg') }}" class="img-cover small-img">
						<div class="text">
							<p>
								Našim cieľom je  Vaša spokojnosť.
							</p>
						</div>
					</div>
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
						Firma DALTRANS, s.r.o vznikla spojením ľudí s dlhoročnými skúsenosťami v odbore dopravy, zasielateľstva a logistiky. Zamestnáva vysokokvalifikovaných zamestnancov z viacjazyčnou dispozíciou a výbornými znalosťami v prepravnom sektore. 
					</p>
					
					<p>
						Našim cieľom je byť Vašim spoľahlivým partnerom na vysokej kvalitatívnej úrovni pre dlhodobú a perspektívnu spoluprácu. Pri našej práci je na prvom mieste flexibilita, individuálny prístup, spoľahlivosť a precíznosť. 
					</p>
					
					<p>
						Špecializujeme sa na vnútroštátnu a medzinárodnú cestnú prepravu, expresnú prepravu, prepravu nebezpečného ADR tovaru a tak isto aj preprave odpadov. Neexistuje krajina, na ktorú by sme si netrúfli aj keď to pre nás niekedy predstavuje veľkú výzvu. Vždy sa ale snažíme splniť aj tie najnáročnejšie požiadavky našich klientov. To je presne to, čo nás na tejto práci baví. 
					</p>
					
					<p>
						Účelom firmy je pomáhať našim klientom zabezpečiť prepravu svojho tovaru z miesta určenia do miesta doručenia podľa ich požiadaviek a hľadať optimálne riešenia prepravných, cenových a relačných podmienok. 
					</p>
					
					<p>
						Našim cieľom je udržať a neustále budovať status úspešnej, silnej a platby schopnej spoločnosti. Stať sa vyhľadávanou, uznávanou špedičnou spoločnosťou. Dosahovať stále vyššiu kvalitu a konkurencieschopnosť našich poskytovaných špedičných služieb. 
					</p>
					
					<p>
						Máme vytvorenú rozsiahlu sieť overených dopravcov, s ktorými pravidelne spolupracujeme.
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
							<div class="col col-md-4 offset-md-2 col-12">
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
								<i class="fas fa-mobile-alt"></i>Telefón: <a href="tel:+421910100928">+421 910 100 928</a>
							</li>
							<li>
								<i></i><span style="visibility: hidden;">Telefón: </span><a href="tel:+421944281940">+421 944 281 940</a>
							</li>
							<li><div class="spacer"></div></li>
							<li>
								<i class="fas fa-envelope"></i>Email: <a href="mailto:logistika@daltrans.sk">logistika@daltrans.sk</a>
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
								<strong>DIČ:</strong> 2120916457
							</li>
							<li>
								<strong>IČ DPH:</strong> SK2120916457
							</li>
					</ul>
				</div>
				<div class="mobile-spacer"></div>
				<div class="mobile-spacer"></div>
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
		<div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1thUasvKn8OwFurUyov_O9jC-Zk3dy_3Z" width="100%" height="350"></iframe></div><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div>
	</section>

@endsection