<?php
    session_start();

    include('connexionDB.php');

    if (!isset($_SESSION['id'])){
        header('Location: ../index.php');
        exit;
    }

    // On récupère tous les utilisateurs sauf l'utilisateur en cours
    $afficher_profil = $DB->query("SELECT *
        FROM utilisateur
        WHERE id <> ?",
        array($_SESSION['id']));

    $afficher_profil = $afficher_profil->fetchAll(); // fetchAll() permet de récupérer plusieurs enregistrements

?>
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
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

    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="../css/component.css" rel="stylesheet">
    </head>

    <body>
		<div id="login-page">
			<div class="container">
      <br><br><br><br><br><br><br><br>
        <table class="tftable" border="1">
          <caption><h1> Utilisateurs </h1></caption>
          <tr>
            <th> Nom </th>
            <th> Prénom </th>
            <th> Voir Profil </th>
          </tr>
            <?php
                // Foreach agit comme une boucle mais celle-ci s'arrête de façon intelligente.
                // Elle s'arrête avec le nombre de lignes qu'il y a dans la variable $afficher_profil

                // La variable $afficher_profil est comme un tableau contenant plusieurs valeurs
                // pour lire chacune des valeurs distinctement on va mettre un pointeur que l'on appellera ici $ap
                foreach($afficher_profil as $ap){
                    ?>
                        <tr>
                            <td><?= $ap['nom'] ?></td>
                            <td><?= $ap['prenom'] ?></td>
                            <td><a href="voir_profil.php?id=<?= $ap['id'] ?>">Aller au profil</a></td>
                        </tr>
                    <?php
                }
            ?>
        </table>
        <script src="assets/js/jquery.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
        <!--BACKSTRETCH-->
          <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
          <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
          <script>
              $.backstretch("assets/img/autre photo.jpg", {speed: 500});
          </script>
      </body>
    </html>
