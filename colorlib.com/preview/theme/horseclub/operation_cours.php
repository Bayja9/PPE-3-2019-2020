<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_cours.php";
//include "letraitementlogin.php";


if (isset($_POST['enregistrerc']))
{

    $id_cours=$_SESSION['id_cours'];
    $nom_cours=$_POST['nom_cours'];
    $lib_cours=$_POST['libelle_cours'];
    $date_deb_cours=$_POST['date_debut_cours'];
    $date_fin_cours=$_POST['date_fin_cours'];
    $repas=$_POST['repas'];
    $localisation_cours=$_POST['localisation_cours'];



<<<<<<< HEAD
    $uncours = new cours (NULL, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, $localisation_cours, '0');
=======
    $uncours = new cours (NULL, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, '0');
>>>>>>> 35f3e9132501168a13f1ce15dddcdab75c125133
    $uncours -> ajout_cours($uncours, $conn);
    header('Location: ./inscriptioncours.php');

}
if (isset($_POST['modifierc']))
{

    $id_cours=$_SESSION['id_cours'];
    $nom_cours=$_POST['nom_cours'];
    $lib_cours=$_POST['libelle_cours'];
    $date_deb_cours=$_POST['date_debut_cours'];
    $date_fin_cours=$_POST['date_fin_cours'];
    $repas=$_POST['repas'];
    $localisation_cours=$_POST['localisation_cours'];

<<<<<<< HEAD
    $uncours = new cours (NULL, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, $localisation_cours, '0');
    $descours -> modif_cours($uncours, $conn);
    header('Location: ./modifcours.php');
=======

    $uncours = new cours (NULL, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, '0');
    $uncours -> modif_cours($uncours, $conn);
    header('Location: ./inscriptioncours.php');
>>>>>>> 35f3e9132501168a13f1ce15dddcdab75c125133
}
if (isset($_POST['suppr']))
{

    $id_cours=$_POST['id_cours'];

<<<<<<< HEAD
    $uncours = new cours ($id_cours,'','','','','','','');
    $descours -> suppr_cours($uncours, $conn);
=======
    $uncours = new cours ($id_cours,'','','','','','');
    $uncours -> suppr_cours($uncours, $conn);
>>>>>>> 35f3e9132501168a13f1ce15dddcdab75c125133
    header('Location: ./inscriptioncours.php');
}
?>
