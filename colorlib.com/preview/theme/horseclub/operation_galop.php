<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_galop.php";
//include "letraitementlogin.php";


if (isset($_POST['enregistrerg']))
{

    $idg=$_SESSION['id_galop'];
    $dat_obt_gal=$_POST['date_obtention_galop'];
    $nom_galop=$_POST['nom_galop'];
    $libelle_galop=$_POST['libelle_galop'];



    $desgalops = new galop (NULL, $dat_obt_gal, $nom_galop, $libelle_galop, '0');
    $desgalops -> ajout_galop($desgalops, $conn);
    header('Location: ./inscriptiongalop.php');

}
if (isset($_POST['modifierg']))
{

    $idg=$_SESSION['id_galop'];
    $dat_obt_gal=$_POST['date_obtention_galop'];
    $nom_galop=$_POST['nom_galop'];
    $lib_galop=$_POST['lib_galop'];


    $desgalops = new galops (NULL, $dat_obt_gal, $nom_galop, $libelle_galop, '0');
    $desgalops -> modif_galop($desgalops, $conn);
    header('Location: ./inscriptiongalop.php');
}
if (isset($_POST['suppr']))
{

    $idg=$_POST['id_galop'];

    $desgalops = new chevaux ($id_galop,'','','','');
    $desgalops -> suppr_galop($deschevaux, $conn);
    header('Location: ./inscriptiongalop.php');
}
?>
