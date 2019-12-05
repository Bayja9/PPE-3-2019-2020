<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="zxx" class="no-js">

<!-- Mirrored from bootstrap4cc.github.io/free-horse-riding-club-theme/training.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2019 12:20:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.html">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Horse Club</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/stage.css">
  </head>
  <body>

      <header id="header" id="home">
        <div class="container">
          <div class="row header-top align-items-center">
            <div class="col-lg-4 col-sm-4 menu-top-left">
              <a href="mailto:info@cheuclub.com"><span class="lnr lnr-location"></span></a>
              <a class="tel" href="mailto:info@cheuclub.com">info@cheuclub.com</a>
            </div>
            <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
            <a href="index.html">
              <img class="img-fluid" src="img/logo.png" alt="">
            </a>
            </div>
            <div class="col-lg-4 col-sm-4 menu-top-right">
              <a class="tel" href="tel:06 12 12 00 54">06.12.12.00.54</a>
              <a href="tel:06 12 12 00 54"><span class="lnr lnr-phone-handset"></span></a>
            </div>
          </div>
        </div>
          <hr>
        <div class="container">
          <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <?php
                if (isset($_SESSION['id'])) {
                  ?>
                  <li><a href="connexion\deconnexion.php">Ajouter des Activités</a></li>
                  <li><a href="connexion\modifier-profil.php">Profil</a></li>
                  <li><a href="connexion\deconnexion.php">Pannel Admin</a></li>
                  <li><a href="connexion\deconnexion.php">Déconnection</a></li>
                    <?php
                  }
                    else {
                      ?>
                <li><a href="index.php">Accueil</a></li>
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
                <?php
                  }
                ?>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </div>
      </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Inscription Pension
            </h1>
            <p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="inscriptionpension.php">Pension</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->
    <!-- Formulaire -->
<center>
    <div class="form-style-10">
      <br><br>
<h1>Inscription Pension<span>Inscrivez les pensions</span></h1>
<form>
    <div class="section"><span>1</span>Information sur la pensions</div>
    <div class="inner-wrap">
        <label><input type="text" name="field1" placeholder="Libellé Pension" /></label>
    </div>
    <hr>
    <div class="section"><span>2</span>Date enregistrement</div>
    <div class="inner-wrap">
        <label>Début pension<input type="date" name="field3" /></label>
        <label>Fin pension<input type="date" name="field4" /></label>
    </div>
    <hr>
    <div class="section"><span>3</span>Information Complémentaire</div>
        <div class="inner-wrap">
        <textarea class="form-control" name="commentaire" rows="8" cols="80" placeholder="Postez un commentaire"></textarea>
    </div>
    <div class="button-group-area mt-40">
						<a href="#" class="genric-btn danger radius">Valider le Cavalier</a>
            <br><br><br>  <br><br><br>
		</div>
</form>
</div>
</center>
<!-- Fin Formulaire -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="../../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
  </body>

<!-- Mirrored from bootstrap4cc.github.io/free-horse-riding-club-theme/training.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2019 12:20:51 GMT -->
</html>
