<?php
    session_start();

    include('connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD

  // S'il y a une session alors on ne retourne plus sur cette page
    if (isset($_SESSION['id'])){
        header('Location: ../index.php');
        exit;
    }

    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;

        if (isset($_POST['connexion'])){

            $mail = htmlentities(strtolower(trim($mail)));
            $mdp = trim($mdp);

            if(empty($mail)){ // Vérification qu'il y est bien un mail de renseigné
                $valid = false;
                $er_mail = "Il faut mettre un mail";
            }

            if(empty($mdp)){ // Vérification qu'il y est bien un mot de passe de renseigné
                $valid = false;
                $er_mdp = "Il faut mettre un mot de passe";
            }

            // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
            $req = $DB->query("SELECT *
                FROM utilisateur
                WHERE mail = ? AND mdp = ?",
                array($mail, crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$")));

            $req = $req->fetch();

            // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
	    if (!isset($req['id'])){
        	$valid = false;
	        $er_mail = "Le mail ou le mot de passe est incorrecte";

	    }elseif($req['n_mdp'] == 1){ // On remet à zéro la demande de nouveau mot de passe s'il y a bien un couple mail / mot de passe
		$DB->insert("UPDATE utilisateur SET n_mdp = 0 WHERE id = ?",
		        array($req['id']));
	    }

            // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
            if ($valid){

                $_SESSION['id'] = $req['id']; // id de l'utilisateur unique pour les requêtes futures
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];

                header('Location:  ../index.php');
                exit;
            }
        }
    }
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
			<div class="login-wrap"><h2 class="form-login-heading">Connexion</h2>
					<td align="right">

            <?php
                if (isset($er_mail)){
            ?>
                <div><?= $er_mail ?></div>
            <?php
                }
            ?>

            <input type="email" class="form-control" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>

            <?php
                if (isset($er_mdp)){
            ?>
                <div><?= $er_mdp ?></div>
            <?php
                }
            ?>

            <input type="password" class="form-control" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>

            <button class="btn btn-theme btn-block" type="submit" name="connexion">Se connecter</button>

					<div class="login-social-link centered">
		            <p>vous pouvez vous connecter via votre reseau social</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Vous n'avez pas encore de compte?<br/>
		                <a class="" href="inscription.php">
		                    Creer un compte
		                </a>
		            </div>
					<br>
					<center>
					Vous avez oublie votre mot de passe?<br/>
					<a href="motdepasse.php">Mot de passe oublie</a>
					</center>
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
