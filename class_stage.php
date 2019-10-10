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

		/*	public function getallutil()
			{
				$data = $this->id_utilisateur;
				$data = $data.$this->nom_utilisateur;
				$data = $data.$this->prenom_utilisateur;
				$data = $data.$this->tel_utilisateur;
				$data = $data.$this->email_utilisateur;
				$data = $data.$this->rue_utilisateur;
				$data = $data.$this->ville_utilisateur;
				$data = $data.$this->cp_utilisateur;
				$data = $data.$this->photo_utilisateur;
				$data = $data.$this->login_utilisateur;
				$data = $data.$this->mdp_utilisateur;
				$data = $data.$this->etat_utilisateur;
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
			/* class Promenade fonctions publiques */
			/* ---------------------- */


			Public function ajout_stage ($objet, $conn)
				{
					$id_sta = $objet->get_id_stage();
					$date_deb_sta = $objet->get_date_debut_stage();
					$date_fin_sta = $objet->get_date_fin_stage();
					$desc_sta = $objet->get_description_stage();
					$etat_sta = $objet->get_etat_stage();


					print $SQL = " INSERT INTO stage values (NULL, '$date_deb_sta', '$date_fin_sta', '$desc_sta', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout cours ');
				}

				Public function modif_cours ($objet, $conn)
				{
          $id_cours = $objet->get_id_cours();
					$nom_cours = $objet->get_nom_cours();
					$lib_cours = $objet->get_libelle_cours();
					$date_deb_cours = $objet->get_date_debut_cours();
					$date_fin_cours = $objet->get_date_fin_cours();
					$etat_cours = $objet->get_etat_cours();


					print $SQL = "UPDATE cours SET id_cours = '$id_cours', nom_cours  = '$nom_cours',
					libelle_cours = '$lib_cours', date_debut_cours = '$date_deb_cours', date_fin_cours = '$date_fin_cours' WHERE id_cours = '$id_cours'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification cours ');
				}

        Public function suppr_cours ($objet, $conn)
        {
          $id_cours = $objet->get_id_cours();

          print $SQL = "UPDATE cours SET etat_cours = '1'
          WHERE id_cours = '$id_cours'";
          $Req = $conn -> query ($SQL) or die (' Erreur suppression cours ');
        }

				Public function affiche_cours_total($objet, $conn)
				{
          $id_cours = $objet->get_id_cours();
					$nom_cours = $objet->get_nom_cours();
					$lib_cours = $objet->get_libelle_cours();
					$date_deb_cours = $objet->get_date_debut_cours();
					$date_fin_cours = $objet->get_date_fin_cours();
					$etat_cours = $objet->get_etat_cours();

					print $SQL = " SELECT *  From cours WHERE id_cours = '$id_cours'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage cours ');
					return $Res = $Req -> fetch ();
				}



	/* ---------------------- */
	/* FIN class Promenade */
	/* ---------------------- */
}
?>
