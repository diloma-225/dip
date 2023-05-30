<div id="sticky-header" class="techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo mt-4">
                    <a class="logo_img" href="{{route('home')}}" title="GEST-DIP ISTC">
                        <img src="{{asset('storage/images/logo/logo.png')}}" alt="" width="50%" />
                    </a>
                    <a class="main_sticky" href="index.html" title="GEST-DIP ISTC">
                        <img src="{{asset('storage/images/logo/logob.png')}}" alt="astute"  width="50%"/>
                    </a>
                </div>
            </div>
            <div class="col-md-10">
                <nav class="techno_menu">
                    <ul class="nav_scroll">
                        <li><a href="{{route('home')}}"> Accueil</a></li>
                        <li><a href="{{route('une')}}"> à La Une</a></li>
                        <li><a href="{{route('about')}}"> à Propos</a></li>
                        <li><a href="{{route('contacts')}}">Contacts  </a></li>
                        <li><a href="#home">App Mobile
                        </a></li>
                    </ul>
                    <div class="donate-btn-header">
                        <a class="dtbtn" href="{{route('register')}}"> S'inscrire</a>
                        <a class="dtbtn" href="{{route('login')}}"> Espace Diplomé </a>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>

<!----- MENU MOBILE ----->
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
    <nav class="techno_menu">
                    <ul class="nav_scroll">
                        <li><a href="{{route('home')}}"> Accueil</a></li>
                        <li><a href="{{route('une')}}"> à La Une</a></li>
                        <li><a href="{{route('about')}}"> à Propos</a></li>
                        <li><a href="{{route('contacts')}}">Contacts  </a></li>
                        <li><a href="#home"> App Mobile </a></li>
                        <li><a class="dtbtn" href="{{route('register')}}"> S'inscrire </a></li>
                        <li><a class="dtbtn" href="{{route('login')}}"> Espace Diplomé </a></li>
                        <li><a href="#"><i class='fa fa-globe'></i></a>
                            <ul class="sub-menu">
                                <li><a href=".">Fr</a></li>
                                <li><a href="index.php?lang=1">EN</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
    </div>
</div>
