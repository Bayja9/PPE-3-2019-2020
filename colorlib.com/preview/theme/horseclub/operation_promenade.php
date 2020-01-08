<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_promenade.php";
//include "letraitementlogin.php";


if (isset($_POST['enregistrerd']))
{

    $idp=$_SESSION['id_promenade'];
    $nom_pro=$_POST['nom_promenade'];
    $desc_pro=$_POST['desc_promenade'];
    $date_deb_pro=$_POST['date_debut_promenade'];
    $date_fin_pro=$_POST['date_fin_promenade'];
    $localisation=$_POST['localisation'];



    $despromenades = new promenade (NULL, $nom_pro, $desc_pro, $date_deb_pro, $date_fin_pro, $localisation, '0');
    $despromenades -> ajout_promenade($despromenades, $conn);
    header('Location: ./inscription_promenade.php');

}

if (isset($_POST['modifierd']))
{

  $idp=$_SESSION['id_promenade'];
  $nom_pro=$_POST['nom_promenade'];
  $desc_pro=$_POST['desc_promenade'];
  $date_deb_pro=$_POST['date_debut_promenade'];
  $date_fin_pro=$_POST['date_fin_promenade'];
  $localisation=$_POST['localisation'];



    $despromenades = new promenade (NULL, $nom_pro, $desc_pro, $date_deb_pro, $date_fin_pro, $localisation, '0');
    $despromenades -> modif_promenade($despromenades, $conn);
    header('Location: ./inscription_promenade.php');
}

if (isset($_POST['suppr']))
{

    $idp=$_SESSION['id_promenade'];

    $despromenades = new promenade ($id_promenade, '','','','','', '');
    $despromenades -> suppr_promenade($despromenades, $conn);
    header('Location: ./inscription_promenade.php');
}
?>
