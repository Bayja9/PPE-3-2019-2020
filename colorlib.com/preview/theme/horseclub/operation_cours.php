<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_cours.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerd']))
{

    $id_cours=$_SESSION['id_cours'];
    $nom_cours=$_POST['nom_cours'];
    $lib_cours=$_POST['libelle_cours'];
    $date_deb_cours=$_POST['date_debut_cours'];
    $date_fin_cours=$_POST['date_fin_cours'];
    $repas=$_POST['repas'];



    $uncours = new cours (NULL, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, '0');
    $descours -> ajout_cours($uncours, $conn);
    header('Location: ./modif_cours.php');

}
if (isset($_POST['modifierd']))
{

    $id_cours=$_SESSION['id_cours'];
    $nom_cours=$_POST['nom_cours'];
    $lib_cours=$_POST['libelle_cours'];
    $date_deb_cours=$_POST['date_debut_cours'];
    $date_fin_cours=$_POST['date_fin_cours'];
    $repas=$_POST['repas'];


    $uncours = new cours (NULL, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, '0');
    $descours -> modif_cours($uncours, $conn);
    header('Location: ./modif_cours.php');
}
if (isset($_POST['suppr']))
{

    $id_cours=$_POST['id_cours'];

    $uncours = new cours ($id_cours,'','','','','','');
    $descours -> suppr_cours($uncours, $conn);
    header('Location: ./modif_cours.php');
}
?>
