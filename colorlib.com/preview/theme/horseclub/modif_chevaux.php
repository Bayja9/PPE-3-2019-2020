<?php
  session_start();
  include "bdd.inc.php";
  include "class_chevaux.php";


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
              Modification Chevaux
            </h1>
            <p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="inscriptionchevaux.php">Chevaux</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->
    <!-- Formulaire -->
    <center>
    <?php
	//recherche chevaux
		include ('bdd.inc.php');
		$SQL = "SELECT * FROM chevaux";
		$req = $conn -> query($SQL);
	?>
	<select name= "LISTEDEROULANTE">
	<?php
		while ($res = $req -> fetch())
	{
	?>

		<option value="<?php echo $res['id_chevaux']?>"><?php echo $res['nom_chevaux']?></option>

	<?php
	}
	//fin de recherche
	?>
	</select><br>
		<input type="submit" name="modif" value="CHOIX">
	</fieldset></form>
<center>
  <?php
    if (isset($_POST['modif']))
      {
        $id_che=$_POST['choix_chevaux'];

        $uncheval = new chevaux (NULL, '', '', '', '', '', '', '', '', '', '', '', '');
        $t = $uncheval -> affiche_chevaux_total($uncheval, $conn);
?>

<?php
}
//$id_che=$_POST['choix_chevaux'];
//$uncheval = new chevaux (NULL, '', '', '', '', '', '', '', '', '', '', '', '');
//$t = $uncheval -> affiche_chevaux_total($id_che, $conn);

 ?>
    <div class="form-style-10">
      <br><br>
<h1>Modification Chevaux<span>Modifier les chevaux</span></h1>
<form action="operation_chevaux.php" method="post">
    <div class="section"><span>1</span>Modifier le cheval</div>
    <div class="inner-wrap">
      <input type="text" class="form-control" name="nom_chevaux" rows="1" value="<?php echo $uncheval -> affiche_chevaux_total($undiplome, $conn)['nom_chevaux']; ?>"/>
      <br>
      <input type="date" name="dna_chevaux"/>
      <br>
      <textarea class="form-control" name="taille_chevaux" rows="1" cols="80" placeholder="Taille du cheval"/></textarea>
      <br>
      <textarea class="form-control" name= type="text" rows="9" ><?php echo $undiplome -> affiche_diplome($undiplome, $conn)['nom_diplome']; ?></textarea>
      <Br>
      <textarea class="form-control" name="couleur_chevaux" rows="1" cols="80" placeholder="Couleur du cheval"/></textarea>
      <br>
      <textarea class="form-control" name="robe_chevaux" rows="1" cols="80" placeholder="Robe du cheval"/></textarea>
      <br>
      <textarea class="form-control" name="sexe_chevaux" rows="1" cols="80" placeholder="Sexe du cheval"/></textarea>
      <br>
      <textarea class="form-control" name="qualite_chevaux" rows="1" cols="80" placeholder="Qualité du cheval"/></textarea>
      <br>
      <textarea class="form-control" name="poids_chevaux" rows="1" cols="80" placeholder="Poids du cheval"/></textarea>
      <br>
      <textarea class="form-control" name="note_chevaux" rows="1" cols="80" placeholder="Note du cheval"/></textarea>
      <br>
      <textarea class="form-control" name="origine_chevaux" rows="1" cols="80" placeholder="Origine du cheval"/></textarea>
      <br>
      <textarea class="form-control" name="utilisation_chevaux" rows="1" cols="80" placeholder="Utilisation du cheval"/></textarea>
      <hr>
    <hr>
  </div>
    <div class="button-group-area mt-40">
     <input type="submit" class="genric-btn danger radius" name="enregistrerche" value="Enregistrer">
            <br><br><br>
   </div>

    <a class="primary-btn" href="modif_chevaux.php">Modification Chevaux</a> <a class="primary-btn" href="suppr_chevaux.php">Suppression Chevaux</a>
    <br><br>
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
