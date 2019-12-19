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



    $uncours = new cours (NULL, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, $localisation_cours, '0');
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
=======

>>>>>>> d5e02e489ea6dc93963f38fa676440a5b88f3a7e
    $uncours = new cours (NULL, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, $localisation_cours, '0');
    $uncours -> modif_cours($uncours, $conn);
    header('Location: ./modifcours.php');
<<<<<<< HEAD
=======

>>>>>>> d5e02e489ea6dc93963f38fa676440a5b88f3a7e
}
if (isset($_POST['suppr']))
{

    $id_cours=$_POST['id_cours'];

<<<<<<< HEAD
    $uncours = new cours ($id_cours,'','','','','','','');
    $descours -> suppr_cours($uncours, $conn);
=======

    $uncours = new cours ($id_cours,'','','','','','','');
    $uncours -> suppr_cours($uncours, $conn);

>>>>>>> d5e02e489ea6dc93963f38fa676440a5b88f3a7e
    header('Location: ./inscriptioncours.php');
}
?>
