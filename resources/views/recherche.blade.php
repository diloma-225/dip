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
    <title>GEST-DIP ISTC</title>
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
							<h2>Rechercher de profil:{{$title}}</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><span>({{count($graduates)}}) Resultat(s)</span></li>
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
    @error('recherche')
        <span style="color:red">{{$message}}</span>
    @enderror

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


    <center>
        <table>
          <tr>
            <th>Nom & Prénoms</th>
            <th>Matricule</th>
            <th>Ecole</th>
            <th>Niveau</th>
            <th>Voir</th>
          </tr>

          @foreach ($graduates as $graduate)
          <tr>
            <td>{{$graduate['user']['name']}} {{$graduate['user']['prenoms']}}</td>
            <td>{{$graduate['matricule']}}</td>
            <td>{{$graduate['ecole']['lib_eco']}}</td>
            <td>{{$graduate['graduate_level']['lib_dip']}}</td>
            <td><a href="{{route('profile.view', ['profile'=>$graduate['id']])}}"><i class="fa fa-eye"></i></a></td>
          </tr>
          @endforeach


        </table>

        </center>


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
