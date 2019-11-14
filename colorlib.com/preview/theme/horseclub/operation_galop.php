<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_galop.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerd']))
{

    $idg=$_SESSION['id_galop'];
    $date_galop=$_POST['date_obtention_galop'];
    $nom_galop=$_POST['nom_galop'];
    $lib_galop=$_POST['lib_galop'];



    $desgalops = new galops (NULL, $date_galop, $nom_galop, $lib_galop, '0');
    $deschevaux -> ajout_galop($uncheval, $conn);
    header('Location: ./modif_chevaux.php');

}
if (isset($_POST['modifierd']))
{

      $idc=$_SESSION['id_chevaux'];
      $nom_chevaux=$_POST['nom_chevaux'];
      $dna_chevaux=$_POST['dna_chevaux'];
      $taille=$_POST['taille_chevaux'];
      $age=$_POST['age_chevaux'];
      $couleur=$_POST['couleur_chevaux'];
      $note=$_POST['note_chevaux'];

      $deschevaux = new chevaux (NULL, $nom_chevaux, $dna_chevaux, $taille, $age, $couleur, $note, '0');
      $deschevaux -> modif_chevaux($deschevaux, $conn);
      header('Location: ./modif_chevaux.php');
}
if (isset($_POST['suppr']))
{

    $idc=$_POST['id_chevaux'];

    $uncheval = new chevaux ($id_cheval,'','','','','','');
    $undiplome -> suppr_diplome($uncheval, $conn);

  header('Location: ./modif_chevaux.php');
}
?>
