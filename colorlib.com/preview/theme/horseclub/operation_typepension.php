<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_stage.php";
//include "letraitementlogin.php";


if (isset($_POST['enregistrertp']))
{

    $idtp=$_SESSION['id_type_pension'];
    $lib_type_p=$_POST=['libelle_type_pension'];
    $etat_type_p=$_POST['etat_type_pension'];


    $unstage = new typepension (NULL, $lib_type_p, '0');
    $unstage -> ajout_type_pension($unstage, $conn);
    header('Location: ./inscriptionstage.php');

}

if (isset($_POST['modifiertp']))
{

    $idtp=$_SESSION['id_type_pension'];
    $lib_type_p=$_POST['libelle_type_pension'];
    $etat_type_p=$_POST['etat_type_pension'];


    $unstage = new typepension (NULL, $lib_type_p, '0');
    $unstage -> modif_type_pension($unstage, $conn);
    header('Location: ./inscriptionstage.php');

}

if (isset($_POST['suppr']))
{

    $idtp=$_SESSION['id_type_pension'];


    $unstage = new typepension ($idtp,'','');
    $unstage -> suppr_type_pension($unstage, $conn);
    header('Location: ./modif_stage.php');
}
?>
