<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_concours.php";
//include "letraitementlogin.php";


if (isset($_POST['enregistrercon']))
{

    $id_con=$_SESSION['id_concours'];
    $nom_con=$_POST['nom_concours'];
    $date_deb_con=$_POST['date_debut_concours'];
    $date_fin_con=$_POST['date_fin_concours'];
    $lib_con=$_POST['lib_concours'];
    $loca_con=$_POST['localisation_concours'];



    $unconcours = new concours (NULL, $nom_con, $date_deb_con, $date_fin_con, $lib_con, $loca_con, '0');
    $unconcours-> ajout_concours($unconcours, $conn);
    header('Location: ./inscription_concours.php');

}
if (isset($_POST['modifiercon']))
{

    $id_con=$_SESSION['id_concours'];
    $nom_con=$_POST['nom_concours'];
    $date_deb_con=$_POST['date_debut_concours'];
    $date_fin_con=$_POST['date_fin_concours'];
    $lib_con=$_POST['lib_concours'];
    $loca_con=$_POST['localisation_concours'];


    $unconcours = new concours (NULL, $nom_con, $date_deb_con, $date_fin_con, $lib_con, $loca_con, '0');
    $unconcours-> modif_concours($unconcours, $conn);
    header('Location: ./modif_concours.php');

}
if (isset($_POST['suppr']))
{

    $id_con=$_POST['id_concours'];

    $unconcours = new concours ($id_concours,'','','','','','');
    $unconcours -> suppr_concours($unconcours, $conn);
    header('Location: ./suppr_concours.php');
}
?>
