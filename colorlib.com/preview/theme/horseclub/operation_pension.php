<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_pension.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerp']))
{

    $idp=$_SESSION['id_pension'];
    $date_debut_p=$_POST['date_debut_pension'];
    $date_fin_p=$_POST['date_fin_pension'];
    $lib_pension=$_POST['lib_pension'];


    $unepension = new pension (NULL, $date_debut_p, $date_fin_p, $lib_pension, '0');
    $unepension -> ajout_pension($unepension, $conn);
    header('Location: ./inscriptionpension.php');

}
if (isset($_POST['modifierp']))
{

    $idp=$_SESSION['id_pension'];
    $date_debut_p=$_POST['date_debut_pension'];
    $date_fin_p=$_POST['date_fin_pension'];
    $lib_pension=$_POST['lib_pension'];


    $unepension = new pension (NULL, $date_debut_p, $date_fin_p, $lib_pension, '0');
    $unepesion -> modif_pension($unepension, $conn);
    header('Location: ./modif_pension.php');
}
if (isset($_POST['suppr']))
{

    $idp=$_SESSION['id_pension'];

    $unepension = new pension ($id_pension,'','','','');
    $unepension -> suppr_pension($unepension, $conn);
    header('Location: ./suppr_pension.php');
}
?>
