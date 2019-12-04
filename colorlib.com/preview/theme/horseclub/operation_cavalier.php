<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_cavalier.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerd']))
{

    $idc=$_SESSION['id_cavalier'];
    $nom_cavalier=$_POST['nom_cavalier'];
    $prenom_cavalier=$_POST['prenom_cavalier'];
    $age_cavalier=$_POST['age_cavalier'];


    $uncavalier = new cavalier (NULL, $nom_cavalier, $prenom_cavalier, $age_cavalier, '0');
    $descavaliers -> ajout_cavalier($uncavalier, $conn);
    header('Location: ./modif_cavalier.php');

}
if (isset($_POST['modifierd']))
{

    $idc=$_SESSION['id_cavalier'];
    $nom_cavalier=$_POST['nom_cavalier'];
    $prenom_cavalier=$_POST['prenom_cavalier'];
    $age_cavalier=$_POST['age_cavalier'];


    $uncavalier = new cavalier (NULL, $nom_cavalier, $prenom_cavalier, $age_cavalier, '0');
    $descavaliers -> modif_cavalier($uncavalier, $conn);
    header('Location: ./modif_cavalier.php');
}
if (isset($_POST['suppr']))
{

    $idc=$_POST['id_cavalier'];

    $uncavalier = new cavalier ($idc,'','','','');
    $descavaliers -> suppr_cavalier($uncavalier, $conn);
    header('Location: ./modif_cavalier.php');
}
?>
