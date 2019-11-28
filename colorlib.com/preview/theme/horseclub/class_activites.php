<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Activites */
	/* ---------------------- */

class activites
{
		/* ---------------------- */
		/* class Activites Variables */
		/* ---------------------- */

		Private $id_activites;
		Private $date_activites;
		Private $heure_activites;
		Private $description_activites;
    Private $etat_activites;

		/* ---------------------- */
		/* class Activites Constructeur */
		/* ---------------------- */

			Public function activites ($id_act, $date_act, $heure_act, $desc_act, $etat_act)
			{

				$this -> id_activites = $id_act;
				$this -> date_activites = $date_act;
				$this -> heure_activites = $heure_act;
				$this -> description_activites = $desc_act;
				$this -> etat_activites = $etat_act;

			}

			/* ---------------------- */
			/* fonction Activites getalldata */
			/* ---------------------- */

			public function getallactivites()
			{
				$data = $this->id_activites;
				$data = $data.$this->date_activites;
				$data = $data.$this->heure_activites;
				$data = $data.$this->description_activites;

				return $data;
			}

			/* ---------------------- */
			/* class Activites GET */
			/* ---------------------- */

			Public function get_id_activites ()
			{
				return $this-> id_activites;
			}

			Public function get_date_activites ()
			{
				return $this-> date_activites;
			}

			Public function get_heure_activites ()
			{
				return $this-> heure_activites;
			}

			Public function  get_description_activites ()
			{
				return $this-> description_activites;
			}

      Public function  get_etat_activites ()
			{
				return $this-> etat_activites;
			}



			/* ---------------------- */
			/* class Activites SET */
			/* ---------------------- */

			Public function set_id_activites ($id_act)
			{
				 $this-> id_activites = $id_act;
			}

			Public function set_date_activites ($date_act)
			{
				 $this-> date_activites = $date_act;
			}

			Public function set_heure_activites ($heure_act)
			{
				 $this-> heure_activites = $heure_act;
			}

			Public function set_description_activites ($desc_act)
			{
				 $this-> description_activites = $desc_act;
			}

      Public function set_etat_activites ($etat_act)
      {
         $this-> etat_activites = $etat_act;
      }


			/* ---------------------- */
			/* class Activites fonctions publiques */
			/* ---------------------- */


			Public function ajout_activites ($objet, $conn)
				{
					$id_act = $objet->get_id_activites();
					$date_act = $objet->get_date_activites();
					$heure_act = $objet->get_heure_activites();
					$desc_act = $objet->get_description_activites();
					$etat_act = $objet->get_etat_activites();


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
