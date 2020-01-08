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
        <h1>Le Tableau des Stages</h1>
      <br><br>
      <table class="tftable" border="1">
      <table border="8" cellpadding="5" cellspacing="2" width="50%" >
       <tr>
         <?php
           include ('bdd.inc.php');
           //Affichage des donnees
             $requete = "SELECT * FROM stage";
             $result = $conn -> query($requete);
         ?>
        <p class="">
          <th align="center" width="1%" style="color:#C40101">Id</th>
          <th align="center" width="1%" style="color:#C40101">Nom du Stage</th>
          <th align="center" width="1%" style="color:#C40101">Début du Stage</th>
          <th align="center" width="1%" style="color:#C40101">Fin du Stage</th>
          <th align="center" width="1%" style="color:#C40101">Description du Stage</th>
          <th align="center" width="1%" style="color:#C40101">Ajouter</th>
          <th align="center" width="1%" style="color:#C40101">Modifier</th>
          <th align="center" width="1%" style="color:#C40101">Supprimer</th>
       </tr>
       <?php
      while($ligne=$result->fetch())
        {
       ?>
          <tr>
             <td align="center" width="1%" style="color:black"><b><?php echo $ligne['id_stage']?></b></td>
             <td align="center" width="24%" style="color:black"><b><?php echo $ligne['nom_stage']?></b></td>
             <td align="center" width="20%" style="color:black"><b><?php echo $ligne['date_debut_stage']?></b></td>
             <td align="center" width="20%" style="color:black"><b><?php echo $ligne['date_fin_stage']?></b></td>
             <td align="center" width="1%" style="color:black"><b><?php echo $ligne['desc_stage']?></b></td>
             <td align="center" width="1%" style="color:black"><a href="inscriptionstage.php"><img src='https://image.flaticon.com/icons/png/512/61/61183.png' width='50px' height='50px'  alt='le alt'/></a>
             <td align="center" width="1%" style="color:black"><a href=operation_stage.php?id_stage=<?php echo $ligne['id_stage']?> </a><img src='http://www.radiolavoiesainte.net/neriyatv/images/modifier.jpg' width='50px' height='50px'  alt='le alt'</td>
             <td align="center" width="1%" style="color:black"><a href=operation_stage.php?id_stage=<?php echo $ligne['id_stage']?> </a><img src='https://cdn.pixabay.com/photo/2013/07/12/12/40/abort-146072_960_720.png' width='50px' height='50px' alt='le alt'</td>
          </tr>
          <?php
        }
           ?>
      </div>
    </div>
    </table>
  </center>
  <script src="connexion/assets/js/jquery.js"></script>
    <script src="connexion/assets/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="connexion/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("connexion/assets/img/autre photo.jpg", {speed: 500});
    </script>
</body>
</html>
