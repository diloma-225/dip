<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>GEST-DIP ISTC</title>
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
<style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 80%;
      border: 1px solid #ddd;
      margin-top: 30px;
      margin-bottom: 30px
    }
    th {
        background:#FF7F00;
        color:white;
    }
    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .photo{
        width: 150px;
        display:block ;
        float:left;

    }

    .inf{
        font-size: 22px;
        font-weight: bold;
    }
    hr{
        width:300px;
        padding: 0;
        margin-bottom:10px;
        margin-top:3px;
    }
    </style>

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
							<h2>Profile :{{$graduate->nom_dipl}} {{$graduate->pnom_dipl}}</h2>
						</div>
						<div class="breatcome_content">
							<ul>

							</ul>
						</div>
					</div>
				</div>
			</div>

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


		</div>
	</div>
	<!-- ============================================================== -->
	<!-- FIN BANNIERE -->
	<!-- ============================================================== -->


    <div class="container" style="margin-top: 30px; margin-bottom:30px">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{asset('storage/photo/'.$graduate->photo)}}" alt="" width="200px">
            </div>
            <div class="col-lg-6">
                <span class="photo"> Nom:</span> <span class="inf" class="inf"> {{$graduate->user->name}} </span> <hr>
                <span class="photo"> Prénoms:</span> <span class="inf"> {{$graduate->user->prenoms}} </span><hr>
                <span class="photo"> Spécialité:</span> <span class="inf"> {{$graduate->specialite->lib_spec}} </span><hr>
                <span class="photo"> Matricule:</span> <span class="inf"> {{$graduate->matricule}} </span><hr>
                <span class="photo"> Ecole:</span> <span class="inf"> {{$graduate->ecole->lib_eco}} </span><hr>
                <span class="photo"> Date de naissance:</span> <span class="inf">{{$graduate->dtenaiss_dipl}} </span><hr>
                <span class="photo"> Contacts:</span> <span class="inf">{{$graduate->contact_dipl}}  </span><hr>
            </div>

            <div class="col-lg-3">
                <a href="{{'http://127.0.0.1:8000/storage/cv/'.$graduate->cv}}" download style="background: green; color:white;border:none;padding:10px">Télécharger le CV</a>

            </div>
        </div>
    </div>



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
