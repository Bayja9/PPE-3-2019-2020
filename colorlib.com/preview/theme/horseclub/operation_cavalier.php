<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_cavalier.php";
//include "letraitementlogin.php";


if (isset($_POST['enregistrercav']))
{

    $id_cav=$_SESSION['id_cavalier'];
    $n=$_POST['nom_cavalier'];
    $p=$_POST['prenom_cavalier'];
    $dna=$_POST['dna_cavalier'];


    $uncavalier = new cavalier (NULL, $n, $p, $dna, '0');
    $uncavalier -> ajout_cavalier($uncavalier, $conn);
    header('Location: ./inscription_cavalier.php');

}
if (isset($_POST['modifiercav']))
{

    $id_cav=$_SESSION['id_cavalier'];
    $n=$_POST['nom_cavalier'];
    $p=$_POST['prenom_cavalier'];
    $dna=$_POST['dna_cavalier'];


    $uncavalier = new cavalier (NULL, $n, $p, $dna, '0');
    $uncavalier -> modif_cavalier($uncavalier, $conn);
    header('Location: ./inscription_cavalier.php');
}
if (isset($_POST['suppr']))
{

    $id_cav=$_POST['id_cavalier'];

    $uncavalier = new cavalier ($idc,'','','','');
    $uncavalier -> suppr_cavalier($uncavalier, $conn);
    header('Location: ./inscription_cavalier.php');
}
?>
