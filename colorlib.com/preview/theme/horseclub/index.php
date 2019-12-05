 <!DOCTYPE html>
 <?php
  session_start();
 ?>
<html lang="fr" class="no-js">

<!-- Mirrored from colorlib.com/preview/theme/horseclub/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 17:43:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="shortcut icon" href="img/fav.html">

<meta name="author" content="codepixer">

<meta name="description" content="">

<meta name="keywords" content="">

<meta charset="UTF-8">

<title>Horse Club</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="../../../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<header id="header" id="home">
<div class="container">
<div class="row header-top align-items-center">
<div class="col-lg-4 col-sm-4 menu-top-left">
<a href="https://colorlib.com/cdn-cgi/l/email-protection#147d7a727b547c7b666771777861763a777b79"><span class="lnr lnr-location"></span></a>
<a class="tel" href="https://colorlib.com/cdn-cgi/l/email-protection#2d44434b426d45425f5e484e41584f034e4240"><span class="__cf_email__" data-cfemail="dbb2b5bdb49bb3b4a9a8beb8b7aeb9f5b8b4b6">[email&#160;protected]</span></a>
</div>
<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
<a href="index-2.html">
<img class="img-fluid" src="img/logo.png" alt="">
</a>
</div>
<div class="col-lg-4 col-sm-4 menu-top-right">
<a class="tel" href="tel:+880 123 12 658 439">06 87 74 75 96</a>
<a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
</div>
</div>
</div>
<hr>
<div class="container">
<div class="row align-items-center justify-content-center d-flex">
<nav id="nav-menu-container"
  <ul class="nav-menu">
    <?php
    if (isset($_SESSION['id'])) {
      ?>
      <li><a href="connexion\deconnexion.php">Ajouter des Activités</a></li>
      <li><a href="connexion\modifier-profil.php">Modifier Profil</a></li>
      <li><a href="connexion\deconnexion.php">Pannel Admin</a></li>
      <li><a href="connexion\deconnexion.php">Déconnection</a></li>
        <?php
      }
        else {
          ?>
    <li class="menu-active"><a href="index.php">Accueil</a></li>
    <li><a href="about.php">À propos</a></li>
    <li><a href="service.php">Services</a></li>
    <li><a href="training.php">Entraînements</a></li>
    <li><a href="calendrier/exemples/activite.php">Activités</a></li>
    <li><a href="events.php">Événements</a></li>
  	<li><a href="pricing.php">Prix</a></li>
    <li><a href="stages.php">Stages</a></li>
    <li><a href="balades.php">Balades</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="connexion\connexion.php">Connection</a></li>
    <li><a href="elements.php">elements</a></li>
    <?php
      }
    ?>
  </ul>
</nav>
</div>
</div>
</header>

<section class="banner-area relative" id="home">
<div class="overlay overlay-bg"></div>
<div class="container">
<div class="row fullscreen d-flex align-items-center justify-content-start">
<div class="banner-content col-lg-12">
<h6>Horse Club</h6>
<span class="bar"></span>
<h1 class="text-white">
Vous êtes la Bienvenue <br>
sur notre site
</h1>
<?php
if (isset($_SESSION['id'])) {
  ?>
  <a href="connexion\deconnexion.php" class="genric-btn">Déconnection</a>
    <?php
  }
    else {
      ?>
<a href="connexion\connexion.php" class="genric-btn">Connexion</a>
<?php
  }
?>
</div>
</div>
</div>
</section>


<section class="about-video-area section-gap">
<div class="container">
<div class="row">
<div class="col-lg-6 about-video-left">
<h6 class="text-uppercase">Horse Club</h6>
<h1>
Vidéo <br>
</h1>
<p>
<span>Voici une petite vidéo pour la présentation des chevaux...</span>
</p>
<a class="primary-btn" href="#">Lancer la vidéo</a>
</div>
<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex">
<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play.png" alt=""></a>
</div>
</div>
</div>
</section>


<section class="feature-area relative pt-100 pb-20">
<div class="overlay overlay-bg"></div>
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<a href="#"><h4 class="text-white">Expert Technicians</h4></a>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<a href="#"><h4 class="text-white">Professional Service</h4></a>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<a href="#"><h4 class="text-white">Great Support</h4></a>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<a href="#"><h4 class="text-white">Technical Skills</h4></a>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<a href="#"><h4 class="text-white">Highly Recomended</h4></a>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<a href="#"><h4 class="text-white">Positive Reviews</h4></a>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
</div>
</div>
</section>





<section class="price-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10">Choisissez le meilleur plan qui vous convient</h1>
          <p>Voici les tarifs</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="single-price">
          <div class="top-part">
            <h1 class="package-no">01</h1>
            <h4>De base </h4>
            <p>Pour les particuliers</p>
          </div>
          <div class="package-list">
            <ul>
              <li>Transfert en ligne sécurisé</li>
              <li>Styles illimités pour l'interface</li>
              <li>Service client fiable</li>
            </ul>
          </div>
          <div class="bottom-part">
            <h1>199.00€</h1>
            <a class="price-btn text-uppercase" href="#">Acheter</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="single-price">
          <div class="top-part">
            <h1 class="package-no">02</h1>
            <h4>Economie</h4>
            <p>Pour les particuliers</p>
          </div>
          <div class="package-list">
            <ul>
              <li>Transfert en ligne sécurisé</li>
              <li>Styles illimités pour l'interface</li>
              <li>Service client fiable</li>
            </ul>
          </div>
          <div class="bottom-part">
            <h1>299.00€</h1>
            <a class="price-btn text-uppercase" href="#">Acheter</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="single-price">
          <div class="top-part">
            <h1 class="package-no">03</h1>
            <h4>Premium</h4>
            <p>Pour les particuliers</p>
          </div>
          <div class="package-list">
            <ul>
              <li>Transfert en ligne sécurisé</li>
              <li>Styles illimités pour l'interface</li>
              <li>Service client fiable</li>
            </ul>
          </div>
          <div class="bottom-part">
            <h1>399.00€</h1>
            <a class="price-btn text-uppercase" href="#">Acheter</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="single-price">
          <div class="top-part">
            <h1 class="package-no">04</h1>
            <h4>Entreprise</h4>
            <p>Pour les particuliers</p>
          </div>
          <div class="package-list">
            <ul>
              <li>Transfert en ligne sécurisé</li>
              <li>Styles illimités pour l'interface</li>
              <li>Service client fiable</li>
            </ul>
          </div>
          <div class="bottom-part">
            <h1>499.00€</h1>
            <a class="price-btn text-uppercase" href="#">Acheter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="booking-area section-gap relative" id="consultancy">
<div class="overlay overlay-bg"></div>
<div class="container">
<div class="row justify-content-between align-items-center">
<div class="col-lg-6 col-md-6 booking-left">
<div class="active-review-carusel">
<div class="single-carusel">
<img src="img/r1.png" alt="">
<div class="title justify-content-start d-flex">
<h4>Fannie Rowe</h4>
<div class="star">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
</div>
<p>
Très bon site ! :)
</p>
<img src="img/r2.png" alt="">
<div class="title justify-content-start d-flex">
<h4>Hulda Sutton</h4>
<div class="star">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
</div>
<p>
Que des personnes aimables dans le centre équestre ;)
</p>
</div>
<div class="single-carusel">
<img src="img/r1.png" alt="">
<div class="title justify-content-start d-flex">
<h4>Fannie Rowe</h4>
<div class="star">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
</div>
<p>
Les prix sont convenables !!!!!!!!
</p>
<img src="img/r2.png" alt="">
<div class="title justify-content-start d-flex">
<h4>Hulda Sutton</h4>
<div class="star">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
</div>
<p>
Le site est très classe ;)
</p>
</div>
<div class="single-carusel">
<img src="img/r1.png" alt="">
<div class="title justify-content-start d-flex">
<h4>Fannie Rowe</h4>
<div class="star">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
</div>
<p>
Le centre équestre est parfait pour tout le monde !
</p>
<img src="img/r2.png" alt="">
<div class="title justify-content-start d-flex">
<h4>Hulda Sutton</h4>
<div class="star">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
</div>
<p>
Que des personnes aimables :)
</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 booking-right">
<h4 class="mb-20">Formulaire de Rendez-vous</h4>
<form action="#">
<input class="form-control" type="text" name="name" placeholder="Votre nom..." required>
<input class="form-control" type="email" name="email" placeholder="Votre Email..." required>
<input class="form-control" type="text" name="phone" placeholder="Tél..." required>
<div class="input-group dates-wrap">
<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & heure" type="text">
 <div class="input-group-prepend">
<span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
</div>
</div>
<textarea class="common-textarea form-control mt-10" name="message" placeholder="Message..." onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Messege'" data-cf-modified-7dbdb0edc011d2b308b8e55e-=""></textarea>
<button class="btn btn-default btn-lg btn-block text-center">Réserver maintenant !</button>
</form>
</div>
</div>
</div>
</section>


<section class="latest-blog-area section-gap" id="blog">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="menu-content pb-60 col-lg-8">
<div class="title text-center">
<h1 class="mb-10">Voici les actualités de notre site ainsi que notre centre équestre </h1>
<p>N'hesitez pas de regarder de temps en temps...</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 single-blog">
<img class="img-fluid" src="img/b1.jpg" alt="">
<ul class="tags">
<li><a href="#">cheveaux pour tout âges </a></li>
<li><a href="#">Life style</a></li>
</ul>
<a href="#"><h4>Voici les nouveaux cheveaux que nous proposons</h4></a>
<p>
Quelques poney en plus mais aussi des nouveaux cheveaux pour les compétitions.
<br>
N'hesitez pas à nous contacter pour plus de renseingements.
</p>
<p class="post-date">Jeudi 14 novembre 2019</p>
</div>
<div class="col-lg-6 single-blog">
<img class="img-fluid" src="img/b2.jpg" alt="">
<ul class="tags">
<li><a href="#">Nouvelles activités </a></li>
<li><a href="#">Life style</a></li>
</ul>
<a href="#"><h4>Voici les nouvelles activités</h4></a>
<p>
Nous proposons encore plus d'activités pour les débutant, amateur mais également pour les plus Pro.
<br>
N'hesitez pas à nous contacter pour plus de renseingements.
</p>
<p class="post-date">Vendredi 16 novembre 2019 </p>
</div>
</div>
</div>
</section>


<section class="gallery-area">
<div class="container-fluid">
<div class="row no-padding">
<div class="active-gallery">
<div class="item single-gallery">
<div class="thumb">
<img src="img/g1.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
</div>
</div>
</div>
<div class="item single-gallery">
<div class="thumb">
<img src="img/g2.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
</div>
</div>
</div>
<div class="item single-gallery">
<div class="thumb">
<img src="img/g3.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
</div>
</div>
</div>
<div class="item single-gallery">
<div class="thumb">
<img src="img/g4.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
</div>
</div>
</div>
<div class="item single-gallery">
<div class="thumb">
<img src="img/g5.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
</div>
</div>
</div>
<div class="item single-gallery">
<div class="thumb">
<img src="img/g6.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<footer class="footer-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h4>À Propos de nous</h4>
          <p>
              Le centre équestre met à votre disposition des infrastructures sécurisées qui vous permettront de monter à cheval même en hiver grâce au grand manège couvert. Deux monitrices Brevet d’État sont à l’écoute de vos attentes pour vous faire progresser et atteindre vos objectifs.
          </p>
        </div>
      </div>
      <div class="col-lg-4  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h4>Contact</h4>
          <p>
            Centre équestre de Brive <br><br>
            Avenue Jean Mirabot, <br><br> 19100 Brive-la-Gaillarde
          </p>
          <p class="number">
            06-56-78-87-45 <br>
            06-56-34-74-12
          </p>
        </div>
      </div>
      <div class="col-lg-5  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h4>Newsletter</h4>
          <p>Vous pouvez nous faire confiance. Nous n'envoyons que des offres, pas un seul spam.</p>
          <div class="d-flex flex-row" id="mc_embed_signup">


              <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                <div class="input-group add-on align-items-center d-flex">
                    <input class="form-control" name="EMAIL" placeholder="Adresse Email..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse Email...'" required="" type="email">
                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                </div>
                  <div class="input-group-btn">
                    <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
                  </div>
                </div>
                  <div class="info mt-20"></div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom row">

      <p class="footer-text m-0 col-lg-6 col-md-12">

        Copyright &copy;<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="7dbdb0edc011d2b308b8e55e-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

      </p>
      <div class="footer-social col-lg-6 col-md-12">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
      </div>
    </div>
  </div>
</footer>

<script src="js/vendor/jquery-2.2.4.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/vendor/bootstrap.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script type="7dbdb0edc011d2b308b8e55e-text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/hoverIntent.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/superfish.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/jquery.ajaxchimp.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/owl.carousel.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/jquery.sticky.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="../../../../code.jquery.com/ui/1.12.1/jquery-ui.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/jquery.nice-select.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/parallax.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/waypoints.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/jquery.counterup.min.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/mail-script.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script src="js/main.js" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="7dbdb0edc011d2b308b8e55e-text/javascript"></script>
<script type="7dbdb0edc011d2b308b8e55e-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="7dbdb0edc011d2b308b8e55e-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/preview/theme/horseclub/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 17:44:12 GMT -->
</html>
