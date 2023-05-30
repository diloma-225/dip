<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DIP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="http://127.0.0.1:8000/storage/images/fav-icon/icon.png">
    <!-- bootstrap CSS -->
    @vite([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/owl.carousel.min.css',
        'resources/assets/css/responsive.css',
        'resources/assets/css/nivo-slider.css',
        'resources/assets/css/animate.css',
        'resources/assets/css/animated-text.css',
        'resources/assets/fonts/font-awesome/css/font-awesome.min.css',
        'resources/assets/css/flaticon.css',
        'resources/assets/css/theme-default.css',
        'resources/assets/css/meanmenu.min.css',
        'resources/assets/style.css',
        'resources/assets/css/owl.transitions.css',
        'resources/venobox/venobox.css',
        'resources/assets/css/widget.css',
        'resources/assets/js/vendor/modernizr-3.5.0.min.js',
    ])
</head>
<body>
    <x-navigation></x-navigation>

    	<!-- ============================================================== -->
	<!-- DEBUT BANNIERRE -->
	<!-- ============================================================== -->
	<div class="breatcome_area d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
							<h2>Contacts</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="{{route('home')}}">Accueil</a> <i class="fa fa-angle-right"></i> <span>Contacts</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- FIN BANNIERRE-->
	<!-- ============================================================== -->

    	<!--==================================================-->
	<!----- Start Techno Contact Address Area ----->
	<!--==================================================-->
	<div class="contact_address_area pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single_contact_address_two">
						<div class="single_contact_address_two_icon">
							<div class="icon">
								<i class="fa fa-map"></i>
							</div>
						</div>
						<div class="single_contact_address_two_content">
							<h4>Côte d’Ivoire</h4>
							<span>Adresse</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_contact_address_two">
						<div class="single_contact_address_two_icon">
							<div class="icon">
								<i class="fa fa-envelope"></i>
							</div>
						</div>
						<div class="single_contact_address_two_content">
							<h4> istc@istc.ci</h4>
							<span>Email</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_contact_address_two">
						<div class="single_contact_address_two_icon">
							<div class="icon">
								<i class="fa fa-phone"></i>
							</div>
						</div>
						<div class="single_contact_address_two_content">
							<h4>+225 27 22 44 88 58</h4>
							<span>Téléphone</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Contact Address Area ----->
	<!--==================================================-->

    	<!--==================================================-->
	<!----- Start Techno Contact Area ----->
	<!--==================================================-->
	<div class="contact_sm_area pt-80 pb-80">
		<div class="container">
			<div class="row cnt_box align-items-center">
				<div class="col-lg-6 p-0">
					<div class="single_contact_rt_thumb">
						<img src="{{asset('storage/images/s-01.jpg')}}" alt="" />
					</div>
				</div>
				<div class="col-xl-6 pl-5">
					<div class="contact_sm_title pb-3">
						<h2>Envoyer un message</h2>
					</div>
					<div class="quote_wrapper">
						<form id="contact_form" action="http://html.dreamitsolution.net/techno/mail.php" method="POST" >
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="nom"  placeholder="Nom">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="phone" placeholder="Téléphone">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="web" placeholder="Objet">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form_box mb-30">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Message..."></textarea>
									</div>
									<div class="quote_btn">
										<button class="btn" type="submit">Soumettre</button>
									</div>
								</div>
							</div>
						</form>
						<p class="form-message"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Contact Area ----->
	<!--==================================================-->

    <x-footer></x-footer>
    @vite([
        'resources/assets/js/vendor/jquery-3.2.1.min.js',
        'resources/assets/js/bootstrap.min.js',
        'resources/assets/js/owl.carousel.min.js',
        'resources/assets/js/jquery.counterup.min.js',
        'resources/assets/js/waypoints.min.js',
        'resources/assets/js/wow.js',
        'resources/assets/js/imagesloaded.pkgd.min.js',
        'resources/venobox/venobox.js',
        'resources/assets/js/ajax-mail.js',
        'resources/assets/js/testimonial.js',
        'resources/assets/js/animated-text.js',
        'resources/venobox/venobox.min.js',
        'resources/assets/js/isotope.pkgd.min.js',
        'resources/assets/js/jquery.nivo.slider.pack.js',
        'resources/assets/js/jquery.meanmenu.js',
        'resources/assets/js/jquery.scrollUp.js',
        'resources/assets/js/theme.js',
    ])
</body>
</html>
