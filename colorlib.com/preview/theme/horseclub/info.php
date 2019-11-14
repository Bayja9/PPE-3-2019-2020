<?php
include "bdd.inc.php";
$id=$_SESSION['id'];


    if ($_SESSION['profil']=="membre")
    {
      $sql="SELECT * FROM membre
            WHERE id_membre=$id";
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
