<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Cour */
	/* ---------------------- */

class robe
{
		/* ---------------------- */
		/* class Cours Variables */
		/* ---------------------- */

		Private $id_robe;
		Private $couleur;

		/* ---------------------- */
		/* class Cours Constructeur */
		/* ---------------------- */

			Public function robe ( $id_robe, $couleur)
			{
				$this -> id_robe = $id_robe;
				$this -> couleur = $couleur;
			}

			/* ---------------------- */
			/* fonction Utilisateur getalldata */
			/* ---------------------- */

			public function getallcours()
			{
				$data = $this->id_robe;
				$data = $data.$this->couleur;

				return $data;
			}

			/* ---------------------- */
			/* class Cours GET */
			/* ---------------------- */

			Public function get_id_robe()
			{
				return $this-> id_robe;
			}

			Public function get_couleur()
			{
				return $this-> couleur;
			}


			/* ---------------------- */
			/* class Cours fonctions publiques */
			/* ---------------------- */


			Public function ajout_robe ($objet, $conn)
				{
					$id_robe = $objet->get_id_robe();
					$couleur = $objet->get_couleur();


					print $SQL = "INSERT INTO robe VALUES(NULL, '$couleur')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout robe ');
				}

				Public function modif_robe ($objet, $conn)
				{
          $id_robe = $objet->get_id_robe();
					$couleur = $objet->get_couleur();


					print $SQL = "UPDATE robe SET couleur  = '$couleur',
				 WHERE couleur = '$couleur'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification cours ');
				}

        Public function suppr_robe ($objet, $conn)
        {
          $id_robe = $objet->get_id_robe();

          print $SQL = "UPDATE robe SET id_robe = '$id_robe',
          WHERE id_robe = '$id_robe'";
          $Req = $conn -> query ($SQL) or die (' Erreur suppression cours ');
        }

				Public function affiche_robe_total($objet, $conn)
				{
          $id_robe = $objet->get_id_robe();
					$couleur = $objet->get_couleur();

					print $SQL = " SELECT *  From robe WHERE id_robe = '$id_robe'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage cours ');
					return $Res = $Req -> fetch ();
				}



	/* ---------------------- */
	/* FIN class Cours */
	/* ---------------------- */
}
?>
