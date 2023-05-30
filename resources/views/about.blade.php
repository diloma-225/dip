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
    <title>DIP </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="http://127.0.0.1:8000/storage/images/fav-icon/icon.png">    <!-- bootstrap CSS -->
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
							<h2>A propos de ISTC Polytechnique</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="{{route('home')}}">Accueil</a> <i class="fa fa-angle-right"></i> <span>à propos</span></li>
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
	<!----- Start Techno About Area ----->
	<!--==================================================-->
	<div class="about_area pt-80 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="single_video mb-4">
						<div class="video_thumb experience text_center">
							<img src="{{asset('storage/images/about-video-img2.png')}}" alt="" />
							<div class="main_video">
								<div class="video-icon">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="single_about_content">
						<div class="prfs_experience">
							<div class="headingh_experience_number">
								<h1>30</h1>
							</div>
							<div class="heading_experience_title">
								<h2>Années d'existence</h2> <br>
								<h2>X volontés de voyager loin!</h2>
							</div>
						</div>
						<div class="heading_experience_text pt-40">
							<p>L’institut est placé sous la tutelle administrative du Ministère de la Communication et des Médias de la République de Côte d’ivoire.</p>
						</div>
						<div class="heading_experience_text pt-3">
							<p>l'ISTC polytechnique regroupe 5 Ecoles à savoir :
                            L´école de journalisme, de Production Audiovisuell, de Télécommunication et des Technologies de l´Audiovisuel, de Publicité-Marketing, des Arts et Images et Numériques</p>
						</div>
                        <div class="heading_experience_text pt-3">
							<p>C’est donc un groupe Ecoles d’enseignement supérieur professionnel qui forme, dans plusieurs spécialités dédiées, aux métiers de l’information et de la communication</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno About Area ----->
	<!--==================================================-->

    	<!--==================================================-->
	<!----- Start Techno  Feature New Style ----->
	<!--==================================================-->
	<div class="feature_area pt-80" style="background-image:url(assets/images/call-bg.png)">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text_center mb-55">
						<div class="section_main_title">
							<h1>Nos écoles</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="feature_style_eight_content">
							<div class="feature_style_eight_icon">
								<i class="fa fa-bullhorn"></i>
								<div class="anim-icon">
                                    <span class="icon icon-1"></span>
                                    <span class="icon icon-2"></span>
                                    <span class="icon icon-3"></span>
                                </div>
							</div>
							<div class="feature_style_eight_title pt-4">
								<h4><a href="managed-service.html">L´ecole de journalisme</a> </h4>
							</div>
							<div class="feature_style_eight_text pt-15">
								<p>forme des journalistes compétents dans les domaines de la presse imprimée, de la radio, de la télévision, du web journalisme, ... </p>
							</div>
							<div class="feature_style_eight_button pt-3">
								<div class="button style-four">
									<a href="#">En avoir plus</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="feature_style_eight_content">
							<div class="feature_style_eight_icon">
								<i class="fa fa-camera "></i>
								<div class="anim-icon">
                                    <span class="icon icon-1"></span>
                                    <span class="icon icon-2"></span>
                                    <span class="icon icon-3"></span>
                                </div>
							</div>
							<div class="feature_style_eight_title pt-4">
								<h4><a href="industries.html">L´école de Production Audiovisuelle</a></h4>
							</div>
							<div class="feature_style_eight_text pt-15">
								<p>forme les cadres compétents dans les domaines de la production radio, télévision, cinéma et web.</p>
							</div>
							<div class="feature_style_eight_button pt-3">
								<div class="button style-four">
									<a href="#">En avoir plus</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="feature_style_eight_content">
							<div class="feature_style_eight_icon">
								<i class="fa fa-search"></i>
								<div class="anim-icon">
                                    <span class="icon icon-1"></span>
                                    <span class="icon icon-2"></span>
                                    <span class="icon icon-3"></span>
                                </div>
							</div>
							<div class="feature_style_eight_title pt-4">
								<h4><a href="business-solution.html">L´école de Publicité-Marketing</a></h4>
							</div>
							<div class="feature_style_eight_text pt-15">
								<p>forme des cadres compétents dans les domaines de la publicité et du marketing.... </p>
							</div>
							<div class="feature_style_eight_button pt-3">
								<div class="button style-four">
									<a href="#">En avoir plus</a>
								</div>
							</div>
						</div>
					</div>
				</div>


                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="feature_style_eight_content">
							<div class="feature_style_eight_icon">
								<i class="fa fa-signal"></i>
								<div class="anim-icon">
                                    <span class="icon icon-1"></span>
                                    <span class="icon icon-2"></span>
                                    <span class="icon icon-3"></span>
                                </div>
							</div>
							<div class="feature_style_eight_title pt-4">
								<h4><a href="business-solution.html">L´école de Télécommunication et des Technologies de l´Audiovisuel</a></h4>
							</div>
							<div class="feature_style_eight_text pt-15">
								<p>forme des journalistes compétents dans les domaines des télécoms et des technologies de l´Audiovisuel. </p>
							</div>
							<div class="feature_style_eight_button pt-3">
								<div class="button style-four">
									<a href="#">En avoir plus</a>
								</div>
							</div>
						</div>
					</div>
				</div>

                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="feature_style_eight_content">
							<div class="feature_style_eight_icon">
								<i class="fa fa-pencil"></i>
								<div class="anim-icon">
                                    <span class="icon icon-1"></span>
                                    <span class="icon icon-2"></span>
                                    <span class="icon icon-3"></span>
                                </div>
							</div>
							<div class="feature_style_eight_title pt-4">
								<h4><a href="business-solution.html">L´École des Arts et Images et Numériques </a></h4>
							</div>
							<div class="feature_style_eight_text pt-15">
								<p>forme des cadres compétents dans les domaines de l´infographie, du multimédias et des métiers du web.</p>
							</div>
							<div class="feature_style_eight_button pt-3">
								<div class="button style-four">
									<a href="#">En avoir plus</a>
								</div>
							</div>
						</div>
					</div>
				</div>



			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno  Feature New Style ----->
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
