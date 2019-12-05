<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_boxs.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerd']))
{

    $id_con=$_SESSION['id_concours'];
    $nom_con=$_POST['nom_concours'];
    $date_deb_con=$_POST['date_deb_con'];
    $date_fin_con=$_POST['date_fin_con'];
    $lib_con=$_POST['libelle_con'];
    $loca_con=$_POST['loca_con'];



    $unconcours = new cours (NULL, $nom_con, $date_deb_con, $date_deb_con, $date_fin_con, $lib_con, $loca_con, '0');
    $desconcours-> ajout_concours($unconcours, $conn);
    header('Location: ./modif_concours.php');

}
if (isset($_POST['modifierd']))
{

    $id_con=$_SESSION['id_concours'];
    $nom_con=$_POST['nom_concours'];
    $date_deb_con=$_POST['date_deb_con'];
    $date_fin_con=$_POST['date_fin_con'];
    $lib_con=$_POST['libelle_con'];
    $loca_con=$_POST['loca_con'];


    $unconcours = new cours (NULL, $nom_con, $date_deb_con, $date_deb_con, $date_fin_con, $lib_con, $loca_con, '0');
    $desconcours-> modif_concours($unconcours, $conn);
    header('Location: ./modif_concours.php');

}
if (isset($_POST['suppr']))
{

    $id_con=$_POST['id_concours'];

    $unconcours = new concours ($id_concours,'','','','','','','');
    $descours -> suppr_concours($unconcours, $conn);
    header('Location: ./modif_concours.php');
}
?>
