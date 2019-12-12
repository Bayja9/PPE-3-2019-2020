<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Promenade */
	/* ---------------------- */

class cours
{
		/* ---------------------- */
		/* class Promenade Variables */
		/* ---------------------- */

		Private $id_cours;
		Private $nom_cours;
		Private $libelle_cours;
		Private $date_debut_cours;
		Private $date_fin_cours;
    Private $repas;
    Private $etat_cours;


		/* ---------------------- */
		/* class Promenade Constructeur */
		/* ---------------------- */

			Public function cours ( $id_cours, $nom_cours, $lib_cours, $date_deb_cours, $date_fin_cours, $repas, $etat_cours)
			{
				$this -> id_cours = $id_cours;
				$this -> nom_cours = $nom_cours;
				$this -> libelle_cours = $lib_cours;
				$this -> date_debut_cours = $date_deb_cours;
        $this -> date_fin_cours = $date_fin_cours;
				$this -> repas = $repas;
        $this -> etat_cours = $etat_cours;
			}

			/* ---------------------- */
			/* fonction Utilisateur getalldata */
			/* ---------------------- */

			public function getallcours()
			{
				$data = $this->id_cours;
				$data = $data.$this->nom_cours;
				$data = $data.$this->libelle_cours;
				$data = $data.$this->date_debut_cours;
				$data = $data.$this->date_fin_cours;
				$data = $data.$this->repas;
				$data = $data.$this->etat_cours;

				return $data;
			}

			/* ---------------------- */
			/* class Promenade GET */
			/* ---------------------- */

			Public function get_id_cours()
			{
				return $this-> id_cours;
			}

			Public function get_nom_cours ()
			{
				return $this-> nom_cours;
			}

			Public function get_libelle_cours ()
			{
				return $this-> libelle_cours;
			}

			Public function get_date_debut_cours ()
			{
				return $this-> date_debut_cours;
			}

			Public function get_date_fin_cours ()
			{
				return $this-> date_fin_cours;
			}

      Public function get_repas ()
      {
				return $this-> repas;
      }

      Public function get_etat_cours ()
      {
      	return $this-> etat_cours;
      }

			/* ---------------------- */
			/* class Promenade SET */
			/* ---------------------- */

			Public function set_id_cours ($id_cours)
			{
				 $this-> id_cours = $id_cours;
			}

			Public function set_nom_cours ($nom_cours)
			{
				 $this-> nom_cours = $nom_cours;
			}

			Public function set_libelle_cours ($lib_cours)
			{
				 $this-> libelle_cours = $lib_cours;
			}

			Public function set_date_debut_cours ($date_deb_cours)
			{
				 $this-> date_debut_cours = $date_deb_cours;
			}

			Public function set_date_fin_cours ($date_fin_cours)
			{
				 $this-> date_fin_cours = $date_fin_cours;
			}

			Public function set_etat_cours ($etat_cours)
			{
				 $this-> etat_cours = $etat_cours;
			}



			/* ---------------------- */
			/* class Promenade fonctions publiques */
			/* ---------------------- */


			Public function ajout_cours ($objet, $conn)
				{
					$id_cours = $objet->get_id_cours();
					$nom_cours = $objet->get_nom_cours();
					$lib_cours = $objet->get_libelle_cours();
					$date_deb_cours = $objet->get_date_debut_cours();
					$date_fin_cours = $objet->get_date_fin_cours();
					$etat_cours = $objet->get_etat_cours();


					print $SQL = " INSERT INTO cours values (NULL, '$nom_cours', '$lib_cours', '$date_deb_cours','$date_fin_cours', '0')";
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
