<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_cours.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerd']))
{

    $idg=$_SESSION['id_galop'];
    $date_galop=$_POST['date_obtention_galop'];
    $nom_galop=$_POST['nom_galop'];
    $lib_galop=$_POST['lib_galop'];



    $desgalops = new galops (NULL, $date_galop, $nom_galop, $lib_galop, '0');
    $desgalops -> ajout_galop($desgalops, $conn);
    header('Location: ./modif_galop.php');

}
if (isset($_POST['modifierd']))
{

    $idg=$_SESSION['id_galop'];
    $date_galop=$_POST['date_obtention_galop'];
    $nom_galop=$_POST['nom_galop'];
    $lib_galop=$_POST['lib_galop'];


    $desgalops = new galops (NULL, $date_galop, $nom_galop, $lib_galop, '0');
    $desgalops -> modif_galop($desgalops, $conn);
    header('Location: ./modif_galop.php');
}
if (isset($_POST['suppr']))
{

    $idg=$_POST['id_galop'];

    $desgalops = new chevaux ($id_galop,'','','','');
    $desgalops -> suppr_galop($deschevaux, $conn);
    header('Location: ./modif_chevaux.php');
}
?>
