<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_robe.php";
//include "letraitementlogin.php";


if (isset($_POST['enregistrero']))
{

    //$id_robe=$_SESSION['id_robe'];
    $couleur=$_POST['couleur'];

    $unerobe = new robe (NULL, $couleur);
    $unerobe-> ajout_robe($unerobe, $conn);
    header('Location: ./inscription_robe.php');

}
if (isset($_POST['modifiero']))
{

    $id_robe=$_SESSION['id_robe'];
    $couleur=$_POST['couleur'];

    $unerobe = new robe ($id_robe, $couleur);
    $unerobe-> modif_robe($unerobe, $conn);
    header('Location: ./modif_robe.php');

}
if (isset($_POST['suppro']))
{

    $id_robe=$_POST['id_robe'];

    $unerobe = new robe ($id_robe,'');
    $unerobe -> suppr_robe($unerobe, $conn);
    header('Location: ./suppr_robe.php');
}
?>
