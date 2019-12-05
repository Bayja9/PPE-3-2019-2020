<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_pension.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerd']))
{

    $idp=$_SESSION['id_pension'];
    $date_debut_p=$_POST['date_debut_pension'];
    $date_fin_p=$_POST['date_fin_pension'];
    $lib_pension=$_POST['lib_pension'];


    $unepension = new pension (NULL, $date_debut_p, $date_fin_p, $lib_pension, '0');
    $despensions -> ajout_pension($unepension, $conn);
    header('Location: ./modif_pension.php');  

}
if (isset($_POST['modifierd']))
{

    $idp=$_SESSION['id_pension'];
    $date_debut_p=$_POST['date_debut_pension'];
    $date_fin_p=$_POST['date_fin_pension'];
    $lib_pension=$_POST['lib_pension'];


    $unepension = new pension (NULL, $date_debut_p, $date_fin_p, $lib_pension, '0');
    $despensions -> modif_pension($unepension, $conn);
    header('Location: ./modif_pension.php');
}
if (isset($_POST['suppr']))
{

    $idp=$_SESSION['id_pension'];

    $unepension = new pension ($id_pension,'','','','');
    $despensions -> suppr_pension($deschevaux, $conn);
    header('Location: ./modif_chevaux.php');
}
?>
