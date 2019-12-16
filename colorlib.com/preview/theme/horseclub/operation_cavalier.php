<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_cavalier.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerd']))
{

    $id_cav=$_SESSION['id_cavalier'];
    $nom_cavalier=$_POST['nom_cavalier'];
    $prenom_cavalier=$_POST['prenom_cavalier'];
    $dna_cavalier=$_POST['dna_cavalier'];


    $uncavalier = new cavalier (NULL, $nom_cavalier, $prenom_cavalier, $dna_cavalier, '0');
    $uncavalier -> ajout_cavalier($uncavalier, $conn);
    header('Location: ./modif_cavalier.php');

}
if (isset($_POST['modifierd']))
{

    $id_cav=$_SESSION['id_cavalier'];
    $nom_cavalier=$_POST['nom_cavalier'];
    $prenom_cavalier=$_POST['prenom_cavalier'];
    $dna_cavalier=$_POST['dna_cavalier'];


    $uncavalier = new cavalier (NULL, $nom_cavalier, $prenom_cavalier, $dna_cavalier, '0');
    $uncavalier -> modif_cavalier($uncavalier, $conn);
    header('Location: ./modif_cavalier.php');
}
if (isset($_POST['suppr']))
{

    $id_cav=$_POST['id_cavalier'];

    $uncavalier = new cavalier ($idc,'','','','');
    $uncavalier -> suppr_cavalier($uncavalier, $conn);
    header('Location: ./modif_cavalier.php');
}
?>
