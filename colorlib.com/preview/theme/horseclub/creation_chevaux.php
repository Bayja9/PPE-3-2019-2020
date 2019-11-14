<?php
//session_start();
include "bdd.inc.php";
include "class_chevaux.php";


  $idc=$_SESSION['id_chevaux'];
  $nom_chevaux=$_POST['nom_chevaux'];
  $dna_chevaux=$_POST['dna_chevaux'];
  $taille=$_POST['taille_chevaux'];
  $age=$_POST['age_chevaux'];
  $couleur=$_POST['couleur_chevaux'];
  $note=$_POST['note_chevaux'];


  ///////////////////////////////////////////////////////////////////////////////
  /*									        CHEVAUX																 */
  ///////////////////////////////////////////////////////////////////////////////
      if ($_SESSION['profil']=="membre")
      {
          $uncheval = new stage (NULL, $nom_chevaux, $dna_chevaux, $taille, $age, $couleur, $note);
          $uncheval -> ajout_stage_util($uncheval, $conn);
          header('Location: ./newsfeed.php');
        }



?>
