@extends('layout')

@section('title', 'Domov')

@section('content')

	<div id="quote-section" class="section">

		<div class="container">
		
			<div class="row">
			
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
							<img src="{{ asset('img/kamion.jpg') }}" class="img-cover">
						</div>
						<div class="col-md col-md-7">
							<h3>Požiadajte o cenovú ponuku</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis.</p>
						</div>
					</div>
				</div>

			</div>

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

	</div>

@endsection