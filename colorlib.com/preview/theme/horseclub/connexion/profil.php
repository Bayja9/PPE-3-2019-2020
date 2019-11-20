<?php
session_start();

    include('connexionDB.php');

    // S'il n'y a pas de session alors on ne va pas sur cette page
    if (!isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }

    // On r�cup�re les informations de l'utilisateur connect�
    $afficher_profil = $DB->query("SELECT * FROM utilisateur WHERE id = ?",
        array($_SESSION['id']));

    $afficher_profil = $afficher_profil->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Dashboard">
		<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Connexion</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    </head>

    <body>
		<div id="login-page">
			<div class="container">

			<form class="form-login" method="post">
        <div class="login-wrap"><h2 class="form-login-heading">Quelques informations sur vous :</h2>
  					<td align="right">
              <div class="login-social-link centered">
        <!-- Ici on peut afficher toutes les informations que vous souhaitez :
            - �ge,
            - sexe,
            - date d'anniversaire,
            - mail,
            - etc.
        -->
        <h3>Voici le profil de <?= $afficher_profil['nom'] . " " .  $afficher_profil['prenom']; ?></h3>
          <p class="">Votre mail est : <?= $afficher_profil['mail'] ?></p>
          <p class="">Votre compte a été cree le : <br> <?= $afficher_profil['date_creation_compte'] ?></p>
          </form>
    			</div>
    		</div>
    	<script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    	<!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
        <script>
            $.backstretch("assets/img/login-bg.jpg", {speed: 500});
        </script>
    </body>
</html>
