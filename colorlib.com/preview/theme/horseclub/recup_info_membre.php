<?php
include "bdd.inc.php";
include "class_membre.php";
$idm=$_SESSION['id_membre'];


    if ($_SESSION['profil']=="membre")

    {
      $sql="SELECT * FROM membre
           WHERE id_membre=$idm";
      $req = $conn -> query($sql)or die($conn->errorInfo());
      $req -> execute();
      $res=$req->fetch();
      $nom=$res['nom_membre'];
      $prenom=$res['prenom_membre'];
      $dna=$res['dna_membre'];
      $mail=$res['mail_membre'];
      $tel=$res['telephone_membre'];

    }


    }
?>
