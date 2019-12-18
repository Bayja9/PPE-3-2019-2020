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
        <h1>Le Tableau Des Chevaux</h1>
      <br><br>
      <table class="tftable" border="1">
      <table border="8" cellpadding="5" cellspacing="2" width="50%" >
       <tr>
         <?php
           include ('bdd.inc.php');
           //Affichage des donnees
   		      $requete = "SELECT * FROM chevaux";
   		      $result = $conn -> query($requete);
         ?>
        <p class="">
          <th width="1%" style="color:#C40101">Nom des Chevaux</th>
          <th width="1%" style="color:#C40101">Date de Naissance des Chevaux</th>
          <th width="1%" style="color:#C40101">Taille des Chevaux</th>
          <th width="1%" style="color:#C40101">Age des Chevaux</th>
          <th width="1%" style="color:#C40101">Couleur des Chevaux</th>
          <th width="1%" style="color:#C40101">Note des Chevaux</th>
          <th width="1%" style="color:#C40101">Ajouter</th>
          <th width="1%" style="color:#C40101">Modifier</th>
          <th width="1%" style="color:#C40101">Supprimer</th>
       </tr>
       <?php
      while($ligne=$result->fetch())
         {
       ?>
          <tr>
             <td width="1%" style="color:black"><b><?php echo $ligne['nom_chevaux']?></b></td>
             <td width="24%" style="color:black"><b><?php echo $ligne['dna_chevaux']?></b></td>
             <td width="24%" style="color:black"><b><?php echo $ligne['taille_chevaux']?></b></td>
             <td width="1%" style="color:black"><b><?php echo $ligne['couleur_chevaux']?></b></td>
             <td width="1%" style="color:black"><b><?php echo $ligne['note_chevaux']?></b></td>
             <td width="1%" style="color:black"><a href=inscription_chevaux.php</a><img src='https://image.flaticon.com/icons/png/512/61/61183.png' width='50px' height='50px'  alt='le alt'</td></td>
             <td width="1%" style="color:black"><a href=operation_chevaux.php?id_chevaux=<?php echo $ligne['id_chevaux']?> </a><img src='http://www.radiolavoiesainte.net/neriyatv/images/modifier.jpg' width='50px' height='50px'  alt='le alt'</td>
             <td width="1%" style="color:black"><a href=operation_chevaux.php?id_chevaux=<?php echo $ligne['id_chevaux']?> </a><img src='https://cdn.pixabay.com/photo/2013/07/12/12/40/abort-146072_960_720.png' width='50px' height='50px' alt='le alt'</td>
          </tr>
          <?php
              }
          ?>
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
