<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Stage */
	/* ---------------------- */

class stage
{
		/* ---------------------- */
		/* class Stage Variables */
		/* ---------------------- */

		Private $id_stage;
		Private $date_debut_stage;
		Private $date_fin_stage;
		Private $description_stage;
    Private $etat_stage;



		/* ---------------------- */
		/* class Stage Constructeur */
		/* ---------------------- */

			Public function stage ( $ids, $date_deb_sta, $date_fin_sta, $desc_sta, $etat_sta )
			{
				$this -> id_stage = $ids;
				$this -> date_debut_stage = $date_deb_sta;
				$this -> date_fin_stage = $date_fin_sta;
				$this -> description_stage = $desc_sta;
        $this -> etat_stage = $etat_sta;
			}

			/* ---------------------- */
			/* fonction Utilisateur getalldata */
			/* ---------------------- */

			public function getallstage()
			{
				$data = $this->id_stage;
				$data = $data.$this->date_debut_stage;
				$data = $data.$this->date_fin_stage;
				$data = $data.$this->description_stage;
				$data = $data.$this->etat_stage;

				return $data;
			}

			/* ---------------------- */
			/* class Promenade GET */
			/* ---------------------- */

			Public function get_id_stage()
			{
				return $this-> id_stage;
			}

			Public function get_date_debut_stage()
			{
				return $this-> date_debut_stage;
			}

			Public function get_date_fin_stage()
			{
				return $this-> date_fin_stage;
			}

			Public function get_description_stage ()
			{
				return $this-> description_stage;
			}

      Public function get_etat_stage ()
      {
      	return $this-> etat_stage;
      }

			/* ---------------------- */
			/* class Promenade SET */
			/* ---------------------- */

			Public function set_id_stage ($ids)
			{
				 $this-> id_stage = $ids;
			}

			Public function set_date_debut_stage ($date_deb_sta)
			{
				 $this-> date_debut_stage = $date_deb_sta;
			}

			Public function set_date_fin_stage ($date_fin_sta)
			{
				 $this-> date_fin_stage = $date_fin_sta;
			}

			Public function set_description_stage ($desc_sta)
			{
				 $this-> description_stage = $desc_sta;
			}


			Public function set_etat_stage ($etat_sta)
			{
				 $this-> etat_cours = $etat_sta;
			}



			/* ---------------------- */
			/* class Stage fonctions publiques */
			/* ---------------------- */


			Public function ajout_stage ($objet, $conn)
				{
					$id_sta = $objet->get_id_stage();
					$date_deb_sta = $objet->get_date_debut_stage();
					$date_fin_sta = $objet->get_date_fin_stage();
					$desc_sta = $objet->get_description_stage();
					$etat_sta = $objet->get_etat_stage();


					print $SQL = " INSERT INTO stage values (NULL, '$date_deb_sta', '$date_fin_sta', '$desc_sta', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout stage ');
				}

				Public function modif_stage ($objet, $conn)
				{
					$id_sta = $objet->get_id_stage();
					$date_deb_sta = $objet->get_date_debut_stage();
					$date_fin_sta = $objet->get_date_fin_stage();
					$desc_sta = $objet->get_description_stage();
					$etat_sta = $objet->get_etat_stage();


					print $SQL = "UPDATE stage SET id_stage = '$id_sta', date_debut_stage  = '$date_deb_sta',
					date_fin_stage = '$date_fin_sta', description_stage = '$desc_sta', WHERE id_stage = '$id_sta'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification stage ');
				}

        Public function suppr_stage ($objet, $conn)
        {
          $id_cours = $objet->get_id_cours();

          print $SQL = "UPDATE stage SET etat_stage = '1'
          WHERE id_stage = '$id_stage'";
          $Req = $conn -> query ($SQL) or die (' Erreur suppression stage ');
        }

				Public function affiche_stage_total($objet, $conn)
				{
					$id_sta = $objet->get_id_stage();
					$date_deb_sta = $objet->get_date_debut_stage();
					$date_fin_sta = $objet->get_date_fin_stage();
					$desc_sta = $objet->get_description_stage();
					$etat_sta = $objet->get_etat_stage();


					print $SQL = " SELECT *  From stage WHERE id_stage = '$id_sta'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage stage ');
					return $Res = $Req -> fetch ();
				}



	/* ---------------------- */
	/* FIN class Stage */
	/* ---------------------- */
}
?>
