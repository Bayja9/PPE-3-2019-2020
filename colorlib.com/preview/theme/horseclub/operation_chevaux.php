<?php
//session_start();
//require_once('login.inc.php');
include "bdd.inc.php";
include "class_chevaux.php";
include "letraitementlogin.php";


if (isset($_POST['enregistrerche']))
{

    $idc=$_SESSION['id_chevaux'];
    $nom_che=$_POST['nom_chevaux'];
    $dna_che=$_POST['dna_chevaux'];
    $taille_che=$_POST['taille_chevaux'];
    $coul_che=$_POST['couleur_chevaux'];
    $robe_che=$_POST['robe_chevaux'];
    $sexe_che=$_POST['sexe_chevaux'];
    $qual_che=$_POST['qualite_chevaux'];
    $note_che=$_POST['note_chevaux'];
    $poids_che=$_POST['poids_chevaux'];
    $origin_che=$_POST['origine_chevaux'];
    $util_che=$_POST['utilisation_chevaux'];
    echo $note_che;

    $deschevaux = new chevaux (NULL, $nom_che, $dna_che, $taille_che, $coul_che, $robe_che, $sexe_che, $qual_che, $note_che, $poids_che, $origin_che, $util_che, '0');
    $deschevaux -> ajout_chevaux($uncheval, $conn);
    //header('Location: ./modif_chevaux.php');

}
if (isset($_POST['modifierche']))
{

    $idc=$_SESSION['id_chevaux'];
    $nom_che=$_POST['nom_chevaux'];
    $dna_che=$_POST['dna_chevaux'];
    $taille_che=$_POST['taille_chevaux'];
    $coul_che=$_POST['couleur_chevaux'];
    $robe_che=$_POST['robe_chevaux'];
    $sexe_che=$_POST['sexe_chevaux'];
    $qual_che=$_POST['qualite_chevaux'];
    $note_che=$_POST['note_chevaux'];
    $poids_che=$_POST['poids_chevaux'];
    $origin_che=$_POST['origine_chevaux'];
    $util_che=$_POST['utilisation_chevaux'];

    $deschevaux = new chevaux (NULL, $nom_che, $dna_che, $taille_che, $coul_che, $robe_che, $sexe_che, $qual_che, $note_che, $poids_che, $origin_che, $util_che, '0');
    $deschevaux -> modif_chevaux($deschevaux, $conn);
    header('Location: ./modif_chevaux.php');
}
if (isset($_POST['suppr']))
{

    $idc=$_POST['id_chevaux'];

    $uncheval = new chevaux ($id_cheval,'','','','','','','','','','','');
    $undiplome -> suppr_diplome($uncheval, $conn);

  header('Location: ./modif_chevaux.php');
}
?>
