<!DOCTYPE html>
<?php
  session_start();
  include "class_stage.php";
  include "bdd.inc.php";
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
                  <li><a href="index">Accueil</a></li>
                  <li><a href="about">À propos</a></li>
                  <li><a href="service">Services</a>
                    <ul>
                      <li><a href="training">Entraînements</a></li>
                      <li><a href="full calendar/examples/google-calendar.html">Activités</a></li>
                      <li><a href="stages">Stages</a></li>
                      <li><a href="balades">Balades</a></li>
                      <li><a href="events">Événements</a></li>
                    </li>
                  </ul>
                  <li><a href="#">Inscription</a>
                    <ul>
                        <li><a href="inscription_cavalier">Inscription Cavalier</a></li>
                        <li><a href="inscription_concours">Inscription Concours</a></li>
                        <li><a href="inscription_promenade">Inscription Promenade</a></li>
                        <li><a href="inscriptionbalade">Inscription Balade</a></li>
                        <li><a href="inscriptioncours">Inscription Cours</a></li>
                        <li><a href="inscriptiongalop">Inscription Galop</a></li>
                        <li><a href="inscriptionpension">Inscription Pension</a></li>
                        <li><a href="inscriptionstage">Inscription Stage</a></li>
                        <li><a href="inscriptionmaj_min.php">Inscription Mineur/Majeur</a></li>
                    </li>
                  </ul>
                  <li><a href="pricing">Prix</a></li>
                  <li><a href="contact">Contact</a></li>
                    <li><a href="connexion\modifier-profil">Mon Compte</a>
                      <ul>
                  <li><a href="connexion\modifier-profil">Profil</a></li>
                  <li><a href="panel">Pannel Admin</a></li>
                  <li><a href="connexion\deconnexion">Déconnection</a></li>
                </li>
                      </ul>
                    <?php
                  }
                    else {
                      ?>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="about.php">À propos</a></li>
                <li class="menu-active"><a href="service">Services</a>
                  <ul>
                    <li><a href="training">Entraînements</a></li>
                    <li><a href="full calendar/examples/google-calendar.html">Activités</a></li>
                    <li><a href="stages">Stages</a></li>
                    <li><a href="balades">Balades</a></li>
                    <li><a href="events">Événements</a></li>
                  </li>
                </ul>
                <li><a href="pricing">Prix</a></li>
                <li><a href="contact">Contact</a></li>
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
              Inscription Stages
            </h1>
            <p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="stages.html">inscriptionstage.php</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->
    <!-- Formulaire -->
<center>
    <div class="form-style-10">
      <br><br>
<h1>Inscription Stage<span>Inscrivez-vous pour ce stage</span></h1>

<section class="training-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-9 pb-40 header-text text-center">
              <div class="section-top-border">
                <h3 class="mb-30">STAGES</h3>
                <div class="row">
                  <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                      Des stages sont organisés, du lundi au samedi, durant toutes les vacances scolaires, en 1/2 journée ou en journée complète avec passage des examens fédéraux. Renseignements au bureau.
                      <br><br>
                      Le galops 8 se déroule sur rendez vous
                      <br><br>
                      Vous pouvez aussi vivre votre passion à travers des cours particuliers de ½ h ou 1h.
                      <br><br>
                      Vous pouvez aussi choisir de faire une animation spécifique : balade, anniversaire, heure libre ou demi-pension…
                      <br><br>
                      Le centre équestre de Vernouillet 78 vous propose de vous accueillir en groupe (comité d’entreprise, centre aéré, école, groupe d’amis…
                    </blockquote>
                  </div>
                </div>
              </div>

      </div>
    </section>
<form action='operation_stage.php' method='post'>
  <hr>
  <div class="inner-wrap">
    <div class="section"><span>1</span>Dates du stage</div>
    <div class="inner-wrap">
      <label for="stage">Date de début<input type="date" name="date_debut_stage"/></label>
      <label for="stage">Date de fin<input type="date" name="date_fin_stage" /></label>
    </div>
    <hr>
    <div class="section"><span>2</span>Informations Complémentaires</div>
        <div class="inner-wrap">
        <textarea class="form-control" name="nom_stage" rows="1" cols="80" placeholder="Nom du stage"></textarea>
        <textarea class="form-control" name="description_stage" rows="8" cols="80" placeholder="Description"></textarea>
    </div>
    <hr>
    <div>
        <input type="submit" name="enregistrers" value="Enregistrer"/>
		</div>

    <section>
    <form action="" method="post">
      <p class="enregistrer">
      <input type="submit" value="enregistrers" class="agrandir" />
      </p>
    </form>
    </section>


    <a class="primary-btn" href="modif_stage.php">Modification Stage</a> <a class="primary-btn" href="suppr_stage.php">Suppression Stage</a>
    <br><br>
</form>
</div>
</center>
<!-- Fin Formulaire -->
<!-- Start training Area -->

    <!-- End training Area -->


    <!-- Start booking Area -->
    <!-- End booking Area -->



    <!-- start footer Area -->

    <!-- End footer Area -->

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
