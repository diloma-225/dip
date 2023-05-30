<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>DIP</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="http://127.0.0.1:8000/storage/images/fav-icon/icon.png">	<!-- bootstrap CSS -->
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

        	<!--==================================================-->
	<!----- SLIDE ----->
	<!--==================================================-->
	<div class="slider_list owl-carousel">
		<div class="slider_area d-flex align-items-center slider1"  id="home">
			<div class="container">
				<div class="row">
					<!--Start Single Portfolio -->
					<div class="col-lg-12">
						<div class="single_slider">
							<div class="slider_content">
								<div class="slider_text">
									<div class="slider_text_inner wow fadeInLeft" data-wow-delay="0.3s">
										<h1> Des diplomés compétents</h1>
									</div>
									<div class="slider_button pt-5 d-flex wow fadeInUp" data-wow-delay="0.4s">
										<div class="button">
											<a  href="{{route('recherche')}}"> Rechercher le profil idéal<i class="fa fa-long-arrow-right"></i></a>
										</div>
									</div>
									<div class="slider-video wow fadeInUp" data-wow-delay="0.3s">
										<div class="video-icon">
											<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=qqI5mbjyv6M&t=38s"><i class="fa fa-play"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider_area d-flex align-items-center slider2" id="home">
			<div class="container">
				<div class="row">
					<!--Start Single Portfolio -->
					<div class="col-lg-12">
						<div class="single_slider">
							<div class="slider_content">
								<div class="slider_text">
									<div class="slider_text_inner wow fadeInLeft" data-wow-delay="0.3s">
										<h1> Des diplomés prêts à l'emploi  </h1>
									</div>
									<div class="slider_button pt-5 d-flex wow fadeInUp" data-wow-delay="0.4s">
										<div class="button">
											<a class="active"  href="#">Découvrir  <i class="fa fa-long-arrow-right"></i></a>
										</div>
									</div>
									<div class="slider-video wow fadeInUp" data-wow-delay="0.3s">
										<div class="video-icon">
											<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!--==================================================-->
	<!----- FIN SLIDE ----->
	<!--==================================================-->

    	<!--==================================================-->
	<!----- DEBUT Flipbox ----->
	<!--==================================================-->
	<div class="flipbox_area top_feature">
		<div class="container">

			<div class="row nagative_margin" style=" margin-top:-250px">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="z-index:100;">
					<form class="form-inline" style=" background:white; padding: 15px;"  action="{{route('recherche.results')}}" method="POST">
                        @csrf
						<div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<input type="text" class="form-control"   placeholder="Matricule / Corps de metier" style="width:100%" name="recherche">
						</div>
						<div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<button type="submit" class="btn  mb-2 " style="background:#ff7f00; color:white; padding:15px">Rechercher</button>
						</div>
					</form> <br><br>
				</div>

				<div class="col-lg-3b col-md-6 col-sm-6 col-xs-6">
					<div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="techno_flipbox_font">
								<div class="techno_flipbox_inner">
									<div class="techno_flipbox_icon">
										<div class="icon">
											<i class="fa fa-bullhorn"></i>
										</div>
									</div>
									<div class="flipbox_title">
										<h3> Journalisme</h3>
									</div>
									<div class="">
										<a href="http://"> Voir + </a>
									</div>
								</div>
						</div>
						<div class="techno_flipbox_back">
							<div class="techno_flipbox_inner">
								<div class="flipbox_title">
									<h3> Corps De Métier </h3>
								</div>
								<div class="flipbox_desc">
									<p>   Agence Presse, WebJournalisme, Télé, Radio, Presse écrite   </p>
								</div>
								<div class="bg-white">
										<a href="http://" style="color:orange"> Voir + </a>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3b col-md-6 col-sm-6 col-xs-6">
					<div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
									<div class="techno_flipbox_icon">
										<div class="icon">
											<i class="fa fa-camera"></i>
										</div>
									</div>
									<div class="flipbox_title">
										<h3>Production Audiovisuelle </h3>
									</div>
									<div class="">
										<a href="http://">Voir + </a>
									</div>
								</div>
						</div>
						<div class="techno_flipbox_back">
							<div class="techno_flipbox_inner">
								<div class="flipbox_title">
									<h3> Corps De Métier </h3>
								</div>
								<div class="flipbox_desc">
									<p> Cadrage, Montage, Direction photo </p>
								</div>
								<div class="bg-white">
										<a href="http://" style="color:orange"> Voir + </a>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3b col-md-6 col-sm-6 col-xs-6">
					<div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
									<div class="techno_flipbox_icon">
										<div class="icon">
											<i class="fa fa-signal"></i>
										</div>
									</div>
									<div class="flipbox_title">
										<h3> <span style="text-transform:none">Télécom- <br> munication</span> </h3>
									</div>
									<div class="">
										<a href="http://">Voir + </a>
									</div>
								</div>
						</div>
						<div class="techno_flipbox_back">
							<div class="techno_flipbox_inner">
								<div class="flipbox_title">
									<h3> Corps De Métier </h3>
								</div>
								<div class="flipbox_desc">
									<p> télécommunications , technologies de l’audiovisuelle </p>
								</div>
								<div class="bg-white">Voir +</a>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3b col-md-6 col-sm-6 col-xs-6">
					<div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
									<div class="techno_flipbox_icon">
										<div class="icon">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="flipbox_title">
									<h3> Publicité -  marketing</h3>
									</div>
									<div class="">
										<a href="http://">Voir + </a>
									</div>
								</div>
						</div>
						<div class="techno_flipbox_back">
							<div class="techno_flipbox_inner">
								<div class="flipbox_title">
									<h3> Corps De Métier </h3>
								</div>
								<div class="flipbox_desc">
									<p> Stratégie publicitaire et marketing, créations </p>
								</div>
								<div class="bg-white">
										<a href="http://" style="color:orange"> Voir + </a>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3b col-md-6 col-sm-6 col-xs-6">
					<div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="techno_flipbox_font">
						<div class="techno_flipbox_inner">
									<div class="techno_flipbox_icon">
										<div class="icon">
											<i class="fa fa-pencil"></i>
										</div>
									</div>
									<div class="flipbox_title">
										<h3> <span style="text-transform: none">Arts et</span> images Numériques </h3>
									</div>
									<div class="">
										<a href="http://"> Voir + </a>
									</div>
								</div>
						</div>
						<div class="techno_flipbox_back">
							<div class="techno_flipbox_inner">
								<div class="flipbox_title">
									<h3> Corps De Metier </h3>
								</div>
								<div class="flipbox_desc">
									<p> infographie, du multimédias et des métiers du web </p>
								</div>
								<div class="bg-white">
										<a href="http://" style="color:orange"> Voir plus </a>
									</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- FIN Flipbox ----->
	<!--==================================================-->

    	<!--==================================================-->
	<!----- DEBUT ETAPE DE RECRUTEMENT ----->
	<!--==================================================-->
	<div class="how_it_work pt-50 pb-65" style="background-image:url({{asset('storage/images/team-bg2.jpg')}})";>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 wow fadeInDown" data-wow-delay="0.4s">
					<div class="section_title text_center mb-60 mt-3">

						<div class="section_main_title">
							<h1>Comment recruter à partir de la plateforme ?</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
						<div class="single_it_work_content pl-2 pr-2">
							<div class="single_it_work_content_list pb-5">
								<span style="background:blue">1</span>
							</div>
							<div class="single_work_content_title pb-2">
								<h4>Saisir le corps de metier</h4>
							</div>
							<div class="single_it_work_content_text pt-1">
								<p><p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
						<div class="single_it_work_content pl-2 pr-2">
							<div class="single_it_work_content_list pb-5">
								<span style="background:blue">2</span>
							</div>
							<div class="single_work_content_title pb-2">
								<h4>Analyser les differents profils proposés</h4>
							</div>
							<div class="single_it_work_content_text pt-1">
								<p><p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
						<div class="single_it_work_content pl-2 pr-2">
							<div class="single_it_work_content_list three pb-5">
								<span style="background:blue">3</span>
							</div>
							<div class="single_work_content_title pb-2">
								<h4>Choisir le profil idéal</h4>
							</div>
							<div class="single_it_work_content_text pt-1">
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- FIN ETAPES DE RECRUTEMENT ----->
	<!--==================================================-->

    	<!--==================================================-->
	<!----- DEBUT A LA UNE ----->
	<!--==================================================-->
	<div class="feature_area  pt-80 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text_center mb-55">
						<div class="section_main_title">
							<h1>A la une</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="feature_style_three mb-4">
						<div class="feature_style_tree_thumb">
							<img src="{{asset('storage/images/jri.jpg')}}" alt="" />
						</div>
						<div class="feature_style_tree_content">
							<div class="feature_style_thre_icon pb-4">
								<div class="icon">
									<i class="fa fa-camera"></i>
								</div>
							</div>
							<div class="feature_style_three_title">
								<h4>Formation JRI </h4>
							</div>
							<div class="feature_style_three_text pt-3">
								<p>Le journaliste reporter d'images est...</p>
							</div>
							<div class="feature_style_three_butoon">
								<a href="#">Voir +</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="feature_style_three mb-4">
						<div class="feature_style_tree_thumb">
							<img src="{{asset('storage/images/journe.jpg')}}" alt="" />
						</div>
						<div class="feature_style_tree_content">
							<div class="feature_style_thre_icon pb-4">
								<div class="icon">
									<i class="flaticon-chart"></i>
								</div>
							</div>
							<div class="feature_style_three_title">
								<h4>Journées scientifiques</h4>
							</div>
							<div class="feature_style_three_text pt-3">
								<p>Les étudiants en fin de cycle pour les cours du soir...</p>
							</div>
							<div class="feature_style_three_butoon">
								<a href="#">Voir +</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="feature_style_three mb-4">
						<div class="feature_style_tree_thumb">
							<img src="{{asset('storage/images/salon.jpg')}}" alt="" />
						</div>
						<div class="feature_style_tree_content">
							<div class="feature_style_thre_icon pb-4">
								<div class="icon">
									<i class="flaticon-developer"></i>
								</div>
							</div>
							<div class="feature_style_three_title">
								<h4>Salon des écoles</h4>
							</div>
							<div class="feature_style_three_text pt-3">
								<p>Le salon des écoles de l'institut regroupe...</p>
							</div>
							<div class="feature_style_three_butoon">
								<a href="#">Voir +</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- FIN A LA UNE ----->
	<!--==================================================-->

    	<!--==================================================-->
	<!----- DEBUT A PROPOS ----->
	<!--==================================================-->
	<div class="about_area bg_color2 pt-70 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="single_about_thumb mb-3">
						<div class="single_about_thumb_inner">
							<img src="{{asset('storage/images/about-img-01-01.jpg')}}" alt="" />
						</div>
					</div>
					<div class="single_about_shape">
						<div class="single_about_shape_thumb bounce-animate">
							<img src="{{asset('storage/images/about-circle-01.png')}}" alt="" />
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="section_title text_left mb-40 mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6>30 ans d'existence</h6>
						</div>
						<div class="section_main_title">
							<h3>L'Institut des Sciences et Techniques de la Communication</h3>
							<h1> <span>ISTC POLYTECHNIQUE</span></h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
						<div class="section_content_text pt-4">
							<p>L’institut est placé sous la tutelle administrative du Ministère de la Communication et des Médias de la République de Côte d’ivoire.</p>
						</div>
					</div>
					<div class="singel_about_left mb-30">
						<div class="singel_about_left_inner mb-3">
							<div class="about_icon mr-4">
								<div class="icon mt-3">
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="singel-about-content">
								<h5>ISTC 5 écoles</h5>
								<p>l'ISTC polytechnique regroupe 5 Ecoles à savoir : <br> L´école de journalisme, de Production Audiovisuell, de Télécommunication et des Technologies de l´Audiovisuel, de Publicité-Marketing, des Arts et Images et Numériques</p>
							</div>
						</div>
						<div class="singel_about_left_inner">
							<div class="about_icon mr-4">
								<div class="icon mt-3">
									<i class="fa fa-crosshairs"></i>
								</div>
							</div>
							<div class="singel-about-content">
								<h5>Missions</h5>
								<p>C’est donc un groupe Ecoles d’enseignement supérieur professionnel qui forme, dans plusieurs spécialités dédiées, aux métiers de l’information et de la communication</p>
							</div>
							<div class="singel-about-content">
								<a href="http://" target="_blank" rel="noopener noreferrer" class="btn btn-success">Voir +</a>							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- FIN A PROPOS ----->
	<!--==================================================-->

    	<!--==================================================-->
	<!----- DEBUT APP MOBILE ----->
	<!--==================================================-->
	<div class="call_do_action pt-85 pb-130 bg_color" style="background-image:url({{asset('storage/images/call-bg.png')}})" >
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title white text_left mb-60 mt-3 wow fadeInLeft" data-wow-delay="0.4s">
						<div class="phone_number mb-3">
							<h5>+206 téléchargement</h5>
						</div>
						<div class="section_main_title">
							<h1>L'applicatin mobile Gest-Dip ISTC</h1>
							<h1>Simple, fluide et facile à utiliser</h1>
						</div>
						<div class="button three mt-40">
							<a href="#">Télécharger l'application moble<i class="fa fa-long-arrow-right"></i></a>
						</div>

					</div>
				</div>
				<div class="col-lg-3">
					<div class="single-video mt-90 wow fadeInRight" data-wow-delay="0.4s">
						<img src="{{asset('storage/images/app.png')}}" alt="" style="width:200%; margin-top:-80px" class="app">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- FIN  APP MOBILE ----->
	<!--==================================================-->

    	<!--==================================================-->
	<!----- DEBUT STATISTIQUES ----->
	<!--==================================================-->
	<div class="counter_area" style="margin-bottom: 30px">
		<div class="container">
			<div class="row cntr_bg_up nagative_margin pt-50 pb-45 wow fadeInUp" data-wow-delay="0.4s">
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">15</span><span>K</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>diplomés</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">1280</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>embauchés à partir de l'appication</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">10</span><span>K</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Visiteurs</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
					<div class="single_counter text_center mb-4 ">
						<div class="countr_text">
							<h1><span class="counter">992</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Recherches sur l'application</h5>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- FIN STATISTIQUES ----->
	<!--==================================================-->




    	<!--==================================================-->
	<!----- DEBUT NOUS CONTACTER ----->
	<!--==================================================-->
	<div class="contact_area pt-85 pb-90" style="background-image:url({{asset('storage/images/bg-cnt-01.jpg')}})" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title white text_center mb-60 mt-3 wow fadeInDown" data-wow-delay="0.4s">
						<div class="section_sub_title uppercase mb-3">
							<h6>Une préoccupation?</h6>
						</div>
						<div class="section_main_title">
							<h1>Ecrivez-nous</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="quote_wrapper wow fadeInUp" data-wow-delay="0.4s">
						<form id="contact_form" action="http://html.dreamitsolution.net/techno/mail.php" method="POST" >
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="name"  placeholder="Nom">
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
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
									</div>
									<div class="quote_btn text_center">
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
	<!----- FIN NOUS CONTACTER ----->
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
