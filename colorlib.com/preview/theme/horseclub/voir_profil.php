<?php
    session_start();

    include('connexionDB.php');

    if (!isset($_SESSION['id'])){
        header('Location: voir_profil.php');
        exit;
    }
    // R�cup�ration de l'id passer en argument dans l'URL
    $id = (int) $_GET['id'];

    // On r�cup�re les informations de l'utilisateur gr�ce � son ID
        $afficher_profil = $DB->query("SELECT *
        FROM utilisateur
        WHERE id = ?",
        array($id));

    $afficher_profil = $afficher_profil->fetch();

    if(!isset($afficher_profil['id'])){
        header('Location: voir_profil.php');
        exit;
    }
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

    <title>Voir Profil</title>

    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="../css/component.css" rel="stylesheet">
    </head>

    <body>
    <center>
		<div id="login-page">
			<div class="container">
        <h2>Voici le profil de <?= $afficher_profil['nom'] . " " .  $afficher_profil['prenom']; ?></h2>
      <br><br>
      <table class="tftable" border="1">
      <caption><h1> Voir Profil </h1></caption>
      <table border="8" cellpadding="5" cellspacing="2" width="50%" >

       <tr>
        <p class="">
          <th width="1%" style="color:#C40101">ID</th>
          <th width="1%" style="color:#C40101">Mail</th>
          <th width="1%" style="color:#C40101">Date de Création</th>
          <th width="1%" style="color:#C40101">Level</th>
       </tr>
          <tr>
             <td width="1%" style="color:black"><b><?= $afficher_profil['id'] ?></b></td>
             <td width="24%" style="color:black"><b><?= $afficher_profil['mail'] ?></b></td>
             <td width="24%" style="color:black"><b><?= $afficher_profil['date_creation_compte'] ?></b></td>
             <td width="1%" style="color:black"><b><?= $afficher_profil['level'] ?></b></td>
          </tr>
      </div>
    </div>
    </table>
  </center>
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
