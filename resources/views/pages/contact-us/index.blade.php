@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('content')
	<section id="content">
		<div class="container">
			<div class="content-pages">
				<div class="content-about content-contact-page">
					<h2 class="title30 font-bold text-uppercase">contact us</h2>
					<div class="contact-google-map bg-white border">
						<div id="map" class="map-custom"></div>
						<script>
						  function initMap() {
							var myLatLng = {lat: 40.707914, lng: -74.009628};

							var map = new google.maps.Map(document.getElementById('map'), {
							  zoom: 12,
							  center: myLatLng
							});

							var marker = new google.maps.Marker({
							  position: myLatLng,
							  map: map,
							});
						  }
						</script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEkQ6AW_lnHAzPiXPdSNy1GKXiI1I9AGg&callback=initMap" async defer></script>
					</div>
					<!-- End Google Map -->
					<div class="contact-page-info blockquote">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="contact-box contact-address-box">
									<span class="color"><i class="icon ion-home"></i></span>
									<label class="title16 color">ADDRESS:</label>
									<p class="desc">{{getSettings()->address}}</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-7 col-xs-12">
								<div class="contact-box">
									<span class="color"><i class="icon ion-ios-telephone"></i></span>
									<ul class="list-inline-block">
										<li>
											<label class="title16 color">PHONES:</label>
										</li>
										<li>
											<span >{{getSettings()->hotline}}</span>
											<span >{{getSettings()->mobile}}</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-5 col-xs-12">
								<div class="contact-box contact-email-box">
									<span class="color"><i class="icon ion-ios-email"></i></span>
									<label class="title16 color">e-mail:</label>
									<p class="desc"><a href="#" >{{getSettings()->email}}</a></p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Contact Info -->
					<div class="contact-form-faq">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="contact-form-page">
									<h2 class="title18 font-bold text-uppercase rale-font">Contact Form</h2>
									<form class="contact-form">
										<p class="contact-name">
											<input class="navi border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="User name*" type="text">
										</p>
										<p class="contact-email">
											<input class="navi border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Email*" type="text">
										</p>
										<p class="contact-message">
											<textarea class="navi border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" cols="30" rows="10">Your comment*</textarea>
										</p>
										<p class="contact-submit">
											<input  class="shop-button bg-color" type="submit" value="Post Comment">
										</p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
