<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Stage */
	/* ---------------------- */

class typepension
{
		/* ---------------------- */
		/* class Stage Variables */
		/* ---------------------- */

		Private $id_type_pension;
		Private $libelle_type_pension;
		Private $etat_type_pension;

		/* ---------------------- */
		/* class Stage Constructeur */
		/* ---------------------- */

			Public function typepension ( $idtp, $lib_type_p, $etat_type_p )
			{
				$this -> id_type_pension = $idtp;
				$this -> libelle_type_pension = $lib_type_p;
				$this -> etat_type_pension = $etat_type_p;
			}

			/* ---------------------- */
			/* fonction Stage getalldata */
			/* ---------------------- */

			public function getalltypepension()
			{
				$data = $this->id_type_pension;
				$data = $data.$this->libelle_type_pension;
				$data = $data.$this->etat_type_pension;

				return $data;
			}

			/* ---------------------- */
			/* class Stage GET */
			/* ---------------------- */

			Public function get_id_type_pension()
			{
				return $this-> id_type_pension;
			}

			Public function get_lib_type_pension()
			{
				return $this-> libelle_type_pension;
			}

			Public function get_etat_type_pension()
			{
				return $this-> etat_type_pension;
			}

			/* ---------------------- */
			/* class Stage SET */
			/* ---------------------- */

			Public function set_id_type_pension ($idtp)
			{
				 $this-> id_type_pension = $idtp;
			}

			Public function set_lib_type_pension ($lib_type_p)
			{
				 $this-> libelle_type_pension = $lib_type_p;
			}

			Public function set_etat_type_pension ($etat_type_p)
			{
				 $this-> etat_type_pension = $etat_type_p;
			}


			/* ---------------------- */
			/* class Stage fonctions publiques */
			/* ---------------------- */


			Public function ajout_type_pension ($objet, $conn)
				{
					$idtp = $objet->get_id_type_pension();
					$lib_type_p = $objet->get_lib_type_pension();
					$etat_type_p = $objet->get_etat_type_pension();


					print $SQL = " INSERT INTO type_pension values (NULL, '$lib_type_p', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout type_pension ');
				}

				Public function modif_type_pension ($objet, $conn)
				{
          $idtp = $objet->get_id_type_pension();
					$lib_type_p = $objet->get_lib_type_pension();
					$etat_type_p = $objet->get_etat_type_pension();


					print $SQL = "UPDATE type_pension SET id_stage = '$lib_type_p' WHERE id_type_pension = '$idtp'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification type_pension ');
				}

        Public function suppr_type_pension ($objet, $conn)
        {
          $idtp = $objet->get_id_type_pension();

          print $SQL = "UPDATE type_pension SET etat_type_pension = '1'
          WHERE id_stage = '$id_stage'";
          $Req = $conn -> query ($SQL) or die (' Erreur suppression type_pension ');
        }

				Public function affiche_type_pension_total($objet, $conn)
				{
          $idtp = $objet->get_id_type_pension();
					$lib_type_p = $objet->get_lib_type_pension();
					$etat_type_p = $objet->get_etat_type_pension();


					print $SQL = " SELECT * FROM type_pension WHERE id_type_pension = '$idtp'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage type_pension ');
					return $Res = $Req -> fetch ();
				}



	/* ---------------------- */
	/* FIN class Stage */
	/* ---------------------- */
}
?>
