<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DIP</title>
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
							<h2>A la une</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="{{route('home')}}">Accueil</a> <i class="fa fa-angle-right"></i> <span>A la une</span></li>
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
	<!----- DEBUT BLOG ----->
	<!--==================================================-->
	<div class="blog_area pt-80 pb-70">
		<div class="container">
			<div class="row">
				<!-- TITRE -->
				<div class="col-lg-12">
					<div class="section_title text_center mb-50 mt-3">

						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>

					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_blog mb-4">
						<div class="single_blog_thumb el_thumb">
							<a href="{{route('une.details', ['une'=>"Formation-JRI"])}}"><img src="{{asset('storage/images/jri.jpg')}}" alt="" /></a>
						</div>
						<div class="single_blog_content pl-4 pr-4">
							<div class="blog_page_title pb-1 pt-3">
								<h3><a href="{{route('une.details', ['une'=>"Formation-JRI"])}}">Formation JRI</a></h3>
							</div>
							<div class="blog_description pb-3">
								<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_blog mb-4">
						<div class="single_blog_thumb el_thumb">
							<a href="details.html"><img src="{{asset('storage/images/journe.jpg')}}" alt="" /></a>
						</div>
						<div class="single_blog_content pl-4 pr-4">
							<div class="blog_page_title pb-1 pt-3">
								<h3><a href="details.html">Journée scientifique</a></h3>
							</div>
							<div class="blog_description pb-3">
								<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_blog mb-4">
						<div class="single_blog_thumb el_thumb">
							<a href="details.html"><img src="{{asset('storage/images/salon.jpg')}}" alt="" /></a>
						</div>
						<div class="single_blog_content pl-4 pr-4">
							<div class="blog_page_title pt-3 pb-1">
								<h3><a href="details.html">Salon des écoles</a></h3>
							</div>
							<div class="blog_description pb-3">
								<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
							</div>
						</div>
					</div>
				</div>

                <div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_blog mb-4">
						<div class="single_blog_thumb el_thumb">
							<a href="details.html"><img src="{{asset('storage/images/jri.jpg')}}" alt="" /></a>
						</div>
						<div class="single_blog_content pl-4 pr-4">
							<div class="blog_page_title pb-1 pt-3">
								<h3><a href="details.html">Formation JRI</a></h3>
							</div>
							<div class="blog_description pb-3">
								<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_blog mb-4">
						<div class="single_blog_thumb el_thumb">
							<a href="details.html"><img src="{{asset('storage/images/journe.jpg')}}" alt="" /></a>
						</div>
						<div class="single_blog_content pl-4 pr-4">
							<div class="blog_page_title pb-1 pt-3">
								<h3><a href="details.html">Journée scientifique</a></h3>
							</div>
							<div class="blog_description pb-3">
								<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_blog mb-4">
						<div class="single_blog_thumb el_thumb">
							<a href="details.html"><img src="{{asset('storage/images/salon.jpg')}}" alt="" /></a>
						</div>
						<div class="single_blog_content pl-4 pr-4">
							<div class="blog_page_title pt-3 pb-1">
								<h3><a href="details.html">Salon des écoles</a></h3>
							</div>
							<div class="blog_description pb-3">
								<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- FIN BLOG ----->
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
