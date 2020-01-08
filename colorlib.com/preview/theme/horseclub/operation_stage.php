<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_stage.php";
//include "letraitementlogin.php";


if (isset($_POST['enregistrers']))
{

    $id_stage=$_SESSION['idg'];
    $nom_sta=$_POST['nom_stage'];
    $description_stage=$_POST['description_stage'];
    $date_debut_stage=$_POST['date_debut_stage'];
    $date_fin_stage=$_POST['date_fin_stage'];
    $localisation_stage=$_POST['localisation_stage'];


    $unstage = new stage (NULL, $nom_sta, $description_stage, $date_debut_stage, $date_fin_stage, $localisation_stage, '0');
    $unstage -> ajout_stage($unstage, $conn);
    header('Location: ./inscriptionstage.php');

}

if (isset($_POST['modifiers']))
{

    $ids=$_SESSION['id_stage'];
    $nom_sta=$_POST=['nom_stage'];
    $description_stage=$_POST['description_stage'];
    $date_debut_stage=$_POST['date_debut_stage'];
    $date_fin_stage=$_POST['date_fin_stage'];
    $localisation_stage=$_POST['localisation_stage'];


    $unstage = new stage (NULL, $nom_sta, $description_stage, $date_debut_stage, $date_fin_stage, $localisation_stage, '0');
    $unstage -> modif_stage($unstage, $conn);
    header('Location: ./modif_stage.php');
}

if (isset($_POST['suppr']))
{

    $ids=$_SESSION['id_stage'];


    $unstage = new stage ($id_promenade,'','','','','');
    $unstage -> suppr_stage($unstage, $conn);
    header('Location: ./modif_stage.php');
}
?>
