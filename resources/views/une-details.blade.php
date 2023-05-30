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
	<!-- DEBUT BANNIERE -->
	<!-- ============================================================== -->
	<div class="breatcome_area d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
							<h2>{{$title}}</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="{{route('home')}}">Accueil</a> <i class="fa fa-angle-right"></i> <a href="#">à la une</a>  <i class="fa fa-angle-right"></i> <span>{{$title}}</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- FIN BANNIERE -->
	<!-- ============================================================== -->


    	<!-- BLOG -->
	<div class="blog_area blog-details-area pt-100 pb-100" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-12">
							<div class="blog_details">
								<div class="blog_dtl_thumb">
									<img src="{{asset('storage/images/salon.jpg')}}" alt="" />
								</div>

								<div class="blog_dtl_content">
									<div class="blog_dtl_top_bs pt-2">
										<span>Ecole</span>
									</div>
									<h2>Salon des écoles</h2>
									<!-- BLOG INFO -->
									<div class="techno-blog-meta">
										<div class="techno-blog-meta-left">
											<span><i class="fa fa-calendar"></i>10 Mar 2020 </span>
											<span><i class="fa fa-comments-o"></i>20 Commentaires </span>
											<span><i class="fa fa-thumbs-up"></i>39 Like </span>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
									<p>Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est there laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium ware doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia on voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos query ratione voluptatem sequi nesciunt. Neque porro quisquam</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dolor an incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud there exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure poor dolor in reprehenderit in voluptate velit esse cillum</p>

									<div class="blog_dtl_thumb pt-3">
										<img src="{{asset('storage/images/cour.jpg')}}" alt="" />
									</div>
									<h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, modi.</h3>
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical on Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at thes Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites</p>
									<blockquote>Richard McClintock, a Latin professor at thes Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites dorem awesme loren very creative  <p class="signatures"><span>Mr. Aleck Jonder</span></p> </blockquote>
									<div class="blog_dt_title mb-4">
										<h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
									</div>
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical on Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at thes Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites</p>

									<div class="blog_details_dtn_icon">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
										<a href="#"><i class="fa fa-reddit"></i></a>
									</div>
								</div>




							</div>
						</div>
						<div class="col-md-12">
							<div class="recent_post_dtls mt-5">
								<div class="blog_dt_title mb-4">
									<h4>Posts récents</h4>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="single_blog mb-4">
											<div class="single_blog_thumb pb-4">
												<a href="details.php"><img src="{{asset('storage/images/journe.jpg')}}" alt="" /></a>
											</div>
											<div class="single_blog_content pl-4 pr-4">
												<div class="techno_blog_meta">
												<div class="blog_page_title pb-1">
													<h3><a href="details.php">Lorem ipsum dolor sit amet consectetur adipisicing.</a></h3>
												</div>
												<div class="blog_description">
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates excepturi dolore sit tempora. Expedita.  </p>
												</div>
												<div class="blog_page_button pb-4">
													<a href="details.php">Voir + <i class="fa fa-long-arrow-right"></i></a>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="single_blog mb-4">
											<div class="single_blog_thumb pb-4">
												<a href="details.php"><img src="{{asset('storage/images/cour.jpg')}}" alt="" /></a>
											</div>
											<div class="single_blog_content pl-4 pr-4">
												<div class="blog_page_title pb-1">
													<h3><a href="details.php">Lorem ipsum dolor sit, amet consectetur adipisicing.</a></h3>
												</div>
												<div class="blog_description">
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odio architecto quasi molestiae maxime voluptatibus. </p>
												</div>
												<div class="blog_page_button pb-4">
													<a href="details.php">Voir +<i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
								<!-- BLOG COMMENTAIRE SECTION-->
                            <div class="blog_comments_section mt-5">
                                <div class="comments_ttl">
                                    <h3>3 commentaires</h3>
                                </div>
                                <!-- COMMENTAIRE -->
                                <div class="single_comments">
                                    <div class="comments_thumb">
                                        <img src="{{asset('storage/images/testi2-01.png')}}" alt="" />
                                    </div>
                                    <div class="commentst_content">
                                        <div class="post_meta">
                                            <span class="badmin">Lorem Lorem</span>
                                            <span class="badmin"><i class="fa fa-clock-o"></i> Jan 06 2020</span>
                                            <a href="#"><span class="commentst_meta_reply"><i class="fa fa-reply"></i>Repondre</span></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    </div>

                                    <div class="single_commentst_inner">
                                        <div class="comments_thumb">
                                            <img src="{{asset('storage/images/testi2-01.png')}}" alt="" />
                                        </div>
                                        <div class="commentst_content">
                                            <div class="post_meta">
                                                <span class="badmin">John Dome</span>
                                                <span class="badmin"><i class="fa fa-clock-o"></i> Jan 06 2020</span>
                                                <a href="#"><span class="commentst_meta_reply"><i class="fa fa-reply"></i>Repondre</span></a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- COMMENTAIRE -->
                                <div class="single_comments">
                                    <div class="comments_thumb">
                                         <img src="{{asset('storage/images/testi2-01.png')}}" alt="" />
                                    </div>
                                    <div class="commentst_content">
                                        <div class="post_meta">
                                            <span class="badmin">YYYYYY</span>
                                            <span class="badmin"><i class="fa fa-clock-o"></i> Jan 06 2020</span>
                                            <a href="#"><span class="commentst_meta_reply"><i class="fa fa-reply"></i>Repondre</span></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    </div>
                                </div>
                            </div>

						</div>
						<div class="col-md-12">
							<div class="blog_reply_coment_dtl mt-5">
                                <div class="reply_ttl">
                                    <h3>Commentaire</h3>
                                </div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="contact_from">
										<form id="contact_form" action="" method="POST" >
											<div class="row">
												<div class="col-lg-6">
													<div class="form_box mb-30">
														<input type="text" name="name"  placeholder="Name">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form_box mb-30">
														<input type="email" name="email" placeholder="Email ">
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
					</div>

				</div>
				<div class=" col-lg-4 col-md-5 col-sm-12 col-xs-12 sidebar-right content-widget pdsr">
					<div class="blog-left-side widget">
						<div id="search-3" class="widget widget_search">
							<div class="search">
								<form action="#" method="get">
									<input type="text" name="s" value="" placeholder="Recherche" title="Recherche">
									<button type="submit" class="icons">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
						</div>
						<div class="widget_about widget sn_bd_dtl_wd">
							<h2 class="widget-title">Administrateur principal</h2>
							<div class="widget_about_thumb">
								<img src="{{asset('storage/images/testi2-01.png')}}" alt="" />
							</div>
							<div class="widget_about_content">
								<h5>Lorem ipsum dolor sit amet.</h5>
								<p>Lorem ipsum dolor sit amet site, compnay business elit, sed do tempor incididunt ut labore thats is great.</p>
							</div>
							<div class="widget_about_icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
								<a href="#"><i class="fa fa-youtube-play"></i></a>
							</div>
						</div>
						<div id="categories-3" class="widget widget_categories">
							<h2 class="widget-title">Categories</h2>
							<ul>
								<li class="cat-item cat-item-8"><a href="#/"><i class="fa fa-youtube-play"></i> Graphic Design <span>(25)</span></a>
								</li>
								<li class="cat-item cat-item-10"><a href="#"><i class="fa fa-youtube-play"></i> Reportage<span>(29)</span></a>
								</li>
								<li class="cat-item cat-item-10"><a href="#"><i class="fa fa-youtube-play"></i> Web Design <span>(29)</span></a>
								</li>
								<li class="cat-item cat-item-9"><a href="#"><i class="fa fa-youtube-play"></i> Cablage <span>(15)</span></a>
								</li>
								<li class="cat-item cat-item-11"><a href="#"><i class="fa fa-youtube-play"></i> interview<span>(22)</span></a>
								</li>
							</ul>
						</div>
						<div id="em_recent_post_widget-6" class="widget widget_recent_data">
							<div class="single-widget-item">
								<h2 class="widget-title">Post populaire</h2>
								<div class="recent-post-item">
									<div class="recent-post-image">
										<a href="#">
											<img width="100" height="80" src="{{asset('storage/images/recent1.jpg')}}" alt="">
										</a>
									</div>
									<div class="recent-post-text">

										<h4><a href="#">
											Lorem ipsum dolor sit amet.
											</a>
										</h4>
										<span class="rcomment">Octobre 16, 2020</span>
									</div>
								</div>
								<div class="recent-post-item">
									<div class="recent-post-image">
										<a href="#">
											<img width="100" height="80" src="{{asset('storage/images/recent2.jpg')}}" alt="">
										</a>
									</div>
									<div class="recent-post-text">

										<h4><a href="#">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, adipisci.
										</a></h4>
										<span class="rcomment">Octobre 16, 2020</span>
									</div>
								</div>
								<div class="recent-post-item">
									<div class="recent-post-image">
										<a href="#">
											<img width="100" height="80" src="{{asset('storage/images/recent3.jpg')}}" alt="">
										</a>
									</div>
									<div class="recent-post-text">

										<h4><a href="#">
										Lorem ipsum dolor sit amet consectetur adipisicing.
										</a></h4>
										<span class="rcomment">Octobre 16, 2020</span>
									</div>
								</div>

							</div>
						</div>

						<div id="tags" class="widget tagcloud">
							<h2 class="widget-title">Archives</h2>
								<a href="#">Evenement</a>
								<a href="#">Reunion</a>
								<a href="#">Rencontre</a>
								<a href="#">interview</a>
								<a href="#">Conference de presse</a>
						</div>

						<div id="text-4" class="widget widget_text">
							<h2 class="widget-title">réseaux sociaux</h2>
							<div class="textwidget">
								<div id="sb_instagram" class="sbi sbi_disable_mobile sbi_col_3 sbi_small" 	style="width:100%;" data-id="6711435208" data-num="6" data-res="auto" data-cols="3" data-options="{&quot;sortby&quot;: &quot;none&quot;, &quot;showbio&quot;: &quot;false&quot;, &quot;headercolor&quot;: &quot;&quot;, &quot;imagepadding&quot;: &quot;5&quot;}" data-sbi-index="0">
									<div id="sbi_images" style="padding: 5px;">
										<div class="sbi_item sbi_type_image">
											<div class="sbi_photo_wrap">
												<a class="sbi_photo" href="#" >
													<img src="{{asset('storage/images/recent1.jpg')}}" alt="" width="100" height="100">
												</a>
											</div>
										</div>
										<div class="sbi_item sbi_type_image">
											<div class="sbi_photo_wrap">
												<a class="sbi_photo" href="#" >
													<img src="{{asset('storage/images/recent2.jpg')}}" alt="" width="100" height="100">
												</a>
											</div>
										</div>
										<div class="sbi_item sbi_type_image">
											<div class="sbi_photo_wrap">
												<a class="sbi_photo" href="#" >
													<img src="{{asset('storage/images/recent3.jpg')}}" alt="" width="100" height="100">
												</a>
											</div>
										</div>
										<div class="sbi_item sbi_type_image">
											<div class="sbi_photo_wrap">
												<a class="sbi_photo" href="#" >
													<img src="{{asset('storage/images/recent4.jpg')}}" alt="" width="100" height="100">
												</a>
											</div>
										</div>
										<div class="sbi_item sbi_type_image">
											<div class="sbi_photo_wrap">
												<a class="sbi_photo" href="#" >
													<img src="{{asset('storage/images/recent5.jpg')}}" alt="" width="100" height="100">
												</a>
											</div>
										</div>
										<div class="sbi_item sbi_type_image">
											<div class="sbi_photo_wrap">
												<a class="sbi_photo" href="#" >
													<img src="{{asset('storage/images/recent6.jpg')}}" alt="" width="100" height="100">
												</a>
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
	</div>
	<!-- FIN BLOG -->


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
