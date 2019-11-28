<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class pension */
	/* ---------------------- */

class pension
{
		/* ---------------------- */
		/* class Pension Variables */
		/* ---------------------- */

		Private $id_pension;
		Private $date_debut_pension;
		Private $date_fin_pension;
		Private $lib_pension;
    Private $etat_pension;

		/* ---------------------- */
		/* class Pension Constructeur */
		/* ---------------------- */

			Public function activites ($idp, $date_debut_p, $date_fin_p, $lib_p, $etat_p)
			{

				$this -> id_pension = $idp;
				$this -> date_debut_pension = $date_debut_p;
				$this -> date_fin_pension = $date_fin_p;
				$this -> lib_pension = $lib_p;
				$this -> etat_pension = $etat_p;

			}

			/* ---------------------- */
			/* fonction Pension getalldata */
			/* ---------------------- */

			public function getallpension()
			{
				$data = $this->id_pension;
				$data = $data.$this->date_debut_pension;
				$data = $data.$this->date_fin_pension;
				$data = $data.$this->lib_pension;

				return $data;
			}

			/* ---------------------- */
			/* class Pension GET */
			/* ---------------------- */

			Public function get_id_pension ()
			{
				return $this-> id_pension;
			}

			Public function get_date_debut_pension ()
			{
				return $this-> date_debut_pension;
			}

			Public function get_date_fin_pension ()
			{
				return $this-> date_fin_pension;
			}

			Public function  get_lib_pension ()
			{
				return $this-> lib_pension;
			}

      Public function  get_etat_pension ()
			{
				return $this-> etat_pension;
			}



			/* ---------------------- */
			/* class Activites SET */
			/* ---------------------- */

			Public function set_id_pension ($idp)
			{
				 $this-> id_pension = $idp;
			}

			Public function set_date_debut_pension ($date_debut_p)
			{
				 $this-> date_debut_pension = $date_debut_p;
			}

			Public function set_date_fin_pension ($date_fin_p)
			{
				 $this-> date_fin_pension = $date_fin_p;
			}

			Public function set_lib_pension ($lib_p)
			{
				 $this-> lib_pension = $lib_p;
			}

      Public function set_etat_pension ($etat_p)
      {
         $this-> etat_pension = $etat_p;
      }


			/* ---------------------- */
			/* class Pension fonctions publiques */
			/* ---------------------- */


			Public function ajout_pension ($objet, $conn)
				{
					$idp = $objet->get_id_pension();
					$date_debut_p = $objet->get_date_debut_pension();
					$date_fin_p = $objet->get_date_fin_pension();
					$lib_p = $objet->get_lib_pension();
					$etat_p = $objet->get_etat_pension();


					print $SQL = " INSERT INTO activites values (NULL, '$date_act', '$heure_act', '$desc_act', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout activites ');
				}

				Public function modif_activites ($objet, $conn)
				{
          $id_act = $objet->get_id_activites();
					$date_act = $objet->get_date_activites();
					$heure_act = $objet->get_heure_activites();
					$desc_act = $objet->get_description_activites();
					$etat_act = $objet->get_etat_activites();


					print $SQL = "UPDATE activites SET id_activites = '$id_act', date_activites  = '$date_act',
					heure_activites = '$heure_act', description_activites = '$desc_act'
					WHERE id_activites = '$id_act'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification activites ');
				}

				Public function affiche_chevaux_total($objet, $conn)
				{
          $id_act = $objet->get_id_activites();
					$date_act = $objet->get_date_activites();
					$heure_act = $objet->get_heure_activites();
					$desc_act = $objet->get_description_activites();
					$etat_act = $objet->get_etat_activites();

					print $SQL = " SELECT * From activites WHERE id_activites = '$id_act'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage activites ');
					return $Res = $Req -> fetch ();
				}

				Public function suppr_chevaux ($objet, $conn)
				{
					$id_act = $objet->get_id_activites();

					print $SQL = "UPDATE activites SET etat_activites = '1'
					WHERE id_activites = '$id_act'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression activites ');
				}


	/* ---------------------- */
	/* FIN class Activites */
	/* ---------------------- */
}
?>
