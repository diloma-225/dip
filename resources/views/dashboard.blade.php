

<!DOCTYPE html>
<html >


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>Dashboard</title>

@vite([
    'resources/dashboard/css/font-face.css',
/*     'resources/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css',
    'resources/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css', */
    'resources/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css',
    'resources/dashboard/vendor/bootstrap-4.1/bootstrap.min.css',
    'resources/dashboard/vendor/animsition/animsition.min.css',
    'resources/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css',
    'resources/dashboard/vendor/wow/animate.css',
    'resources/dashboard/vendor/css-hamburgers/hamburgers.min.css',
    'resources/dashboard/vendor/slick/slick.css',
    'resources/dashboard/vendor/select2/select2.min.css',
    'resources/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css',
    'resources/dashboard/css/theme.css'
])


<body class="">
<div class="page-wrapper">

<header class="header-mobile d-block d-lg-none">
<div class="header-mobile__bar">
<div class="container-fluid">
<div class="header-mobile-inner">
<a class="logo" href="#">
<img src="https://gestdip.000webhostapp.com/dashboard/images/logo.png" width="50%" />
</a>
<button class="hamburger hamburger--slider" type="button">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
</div>
<nav class="navbar-mobile">
    <div class="container-fluid">
        <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub">
            <a class="js-arrow" href="https://gestdip.000webhostapp.com/dashboard/index.php">
            <i class="fas fa-tachometer-alt"></i>Accueil</a>
            </li>
            <li class="has-sub">
            <a class="js-arrow" href="/add-students">
            <i class="fas fa-tachometer-alt"></i>Accueil</a>
            </li>

        </ul>
    </div>
</nav>
</header>


<aside class="menu-sidebar d-none d-lg-block">
<div class="logo">
<a href="/dashboard">
    <img src="https://gestdip.000webhostapp.com/dashboard/images/logo.png" width="50%" />
</a>
</div>
<div class="menu-sidebar__content js-scrollbar1">
<nav class="navbar-sidebar">
<ul class="list-unstyled navbar__list">
    <li class="active has-sub">
    <a class="js-arrow" href="/dashboard">
        <i class="fas fa-tachometer-alt"></i>Accueil</a>
    </li>
    <li>
    <a  href="/add-students">
        <i class="fas fa-tachometer-alt"></i>Ajouter un étudiant</a>
    </li>
 </ul>
</nav>
</div>
</aside>


<div class="page-container">

<header class="header-desktop">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="header-wrap">
<form class="form-header" action="#" method="POST">
<input class="au-input au-input--xl" type="text" name="search" placeholder="Rechercher..." />
<button class="au-btn--submit" type="submit">
<i class="zmdi zmdi-search"></i>
</button>
</form>
<div class="header-button">
<div class="noti-wrap">
<div class="noti__item js-item-menu">
<i class="zmdi zmdi-comment-more"></i>
<span class="quantity">1</span>
<div class="mess-dropdown js-dropdown">
<div class="mess__title">
<p>2 messages</p>
</div>
<div class="mess__item">
<div class="image img-cir img-40">
<img src="https://gestdip.000webhostapp.com/dashboard/images/avatar.jpg" alt="Michelle Moreno" />
</div>
<div class="content">
<h6>Yeo Siaka</h6>
<p>Veuillez modifier mes infos</p>
<span class="time">3 min</span>
</div>
</div>
<div class="mess__item">
<div class="image img-cir img-40">
<img src="https://colorlib.com/polygon/cooladmin/images/icon/avatar-04.jpg" alt="Diane Myers" />
</div>
<div class="content">
<h6>Yeo Siaka</h6>
<p>Veuillez modifier mes infos</p>
<span class="time">3 min</span>
</div>
</div>
<div class="mess__footer">
<a href="#">Voir tous les messages</a>
</div>
</div>
</div>

<div class="noti__item js-item-menu">
<i class="zmdi zmdi-notifications"></i>
<span class="quantity">3</span>
<div class="notifi-dropdown js-dropdown">
<div class="notifi__title">
<p>3 Demandes de certificats</p>
</div>
<div class="notifi__item">
<div class="bg-c1 img-cir img-40">
<i class="zmdi zmdi-email-open"></i>
</div>
<div class="content">
<p>Certificat</p>
<span class="date">Avril 12, 2018 06:50</span>
</div>
</div>
<div class="notifi__item">
<div class="bg-c2 img-cir img-40">
<i class="zmdi zmdi-account-box"></i>
</div>
<div class="content">
    <p>Certificat</p>
<span class="date">Avril 12, 2018 06:50</span>
</div>
</div>
<div class="notifi__item">
<div class="bg-c3 img-cir img-40">
<i class="zmdi zmdi-file-text"></i>
</div>
<div class="content">
    <p>Certificat</p>
<span class="date">Avril 12, 2018 06:50</span>
</div>
</div>
<div class="notifi__footer">
<a href="#">Voir toutes les demandes</a>
</div>
</div>
</div>
</div>
<div class="account-wrap">
<div class="account-item clearfix js-item-menu">
<div class="image">
<img src="https://gestdip.000webhostapp.com/dashboard/images/avatar.jpg" alt="Yeo" />
</div>
<div class="content">
<a class="js-acc-btn" href="#">Yeo Siaka</a>
</div>
<div class="account-dropdown js-dropdown">
<div class="info clearfix">
<div class="image">
<a href="#">
<img src="https://gestdip.000webhostapp.com/dashboard/images/avatar.jpg" alt="Yeo Siaka" />
</a>
</div>
<div class="content">
<h5 class="name">
<a href="#">Yeo Siaka</a>
</h5>
<span class="email"><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4bebbbcbab0bbb194b1acb5b9a4b8b1fab7bbb9">[email&#160;protected]</a></span>
</div>
</div>
<div class="account-dropdown__body">
<div class="account-dropdown__item">

<div class="account-dropdown__item">
<a href="#">
<i class="zmdi zmdi-settings"></i>Parametres</a>
</div>

</div>
<div class="account-dropdown__footer">
<a href="#">
<i class="zmdi zmdi-power"></i>Déconnexion</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>


<script data-cfasync="false" src="https://colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://colorlib.com/polygon/cooladmin/vendor/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/polygon/cooladmin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/bootstrap-4.1/bootstrap.min.js"></script>

<script src="https://colorlib.com/polygon/cooladmin/vendor/slick/slick.min.js">
    </script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/wow/wow.min.js"></script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/animsition/animsition.min.js"></script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/counter-up/jquery.counterup.min.js">
    </script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="https://colorlib.com/polygon/cooladmin/vendor/select2/select2.min.js">
    </script>

<script src="https://colorlib.com/polygon/cooladmin/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"706ac21bad534087","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>

<script>

$(document).ready(function(){
$('#spec').on('change',function(){
var idspec = $(this).val();
if(idspec){
    $.get(
        "https://gestdip.000webhostapp.com/dashboard/ajax.php",
         {spec : idspec},
         function(data){
             $('#eco').html(data);
         }
    );
}
else{
    $('#eco').html('<option> Select spec </option>');
}
});
});

</script>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
        <div class="overview__inner">
        <div class="overview-box clearfix">
        <div class="icon">
        <i class="zmdi zmdi-account-o"></i>
        </div>
        <div class="text">
        <h2>10 368</h2>
        <span>Diplomés</span>
        </div>
        </div>
        <div class="overview-chart">
        <canvas id="widgetChart1"></canvas>
        </div>
        </div>
        </div>
        </div>
        <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
        <div class="overview__inner">
        <div class="overview-box clearfix">
        <div class="icon">
            <i class="zmdi zmdi-account-o"></i>

        </div>
        <div class="text">
        <h2>38 688</h2>
        <span> Diplomés insérés</span>
        </div>
        </div>
        <div class="overview-chart">
        <canvas id="widgetChart2"></canvas>
        </div>
        </div>
        </div>
        </div>
        <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
        <div class="overview__inner">
        <div class="overview-box clearfix">
        <div class="icon">
        <i class="zmdi zmdi-account-o"></i>

        </div>
        <div class="text">
        <h2>1086</h2>
        <span> Diplomés libres</span>
        <span> </span>
        </div>
        </div>
        <div class="overview-chart">
        <canvas id="widgetChart3"></canvas>
        </div>
        </div>
        </div>
        </div>
        <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
        <div class="overview__inner">
        <div class="overview-box clearfix">
        <div class="icon">
        <i class="zmdi zmdi-account-o"></i>

        </div>
        <div class="text">
        <h2>2060</h2>
        <span> Diplomés freelances</span>
        <span> </span>
        </div>
        </div>
        <div class="overview-chart">
        <canvas id="widgetChart4"></canvas>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
        <div class="au-card recent-report">
        <div class="au-card-inner">
        <h3 class="title-2">Statistiques</h3>
        <div class="chart-info">
        <div class="chart-info__left">
        <div class="chart-note">
        <span class="dot dot--blue"></span>
        <span>Diplomés</span>
        </div>
        <div class="chart-note mr-0">
        <span class="dot dot--green"></span>
        <span>Diplomés Insérés</span>
        </div>
        </div>

        </div>
        <div class="recent-report__chart">
        <canvas id="recent-rep-chart"></canvas>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="au-card chart-percent-card">
        <div class="au-card-inner">
        <h3 class="title-2 tm-b-5"> %</h3>
        <div class="row no-gutters">
        <div class="col-xl-6">
        <div class="chart-note-wrap">
        <div class="chart-note mr-0 d-block">
        <span class="dot dot--blue"></span>
        <span>Diplomés</span>
        </div>
        <div class="chart-note mr-0 d-block">
        <span class="dot dot--red"></span>
        <span>Diplomés insérés</span>
        </div>
        </div>
        </div>
        <div class="col-xl-6">
        <div class="percent-chart">
        <canvas id="percent-chart"></canvas>
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
</div>

<div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim Deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="$<span style='font-size: 80px;'>2.49</span>/mo",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>


<!-- Mirrored from gestdip.000webhostapp.com/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:22:36 GMT -->
</html>

