<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Concours */
	/* ---------------------- */

class concours
{
		/* ---------------------- */
		/* class Concours Variables */
		/* ---------------------- */

		Private $id_concours;
		Private $nom_concours;
		Private $date_debut_concours;
		Private $date_fin_concours;
		Private $libelle_concours;
    Private $localisation_concours;
    Private $etat_concours;



		/* ---------------------- */
		/* class Concours Constructeur */
		/* ---------------------- */

			Public function concours ( $id_con, $nom_con, $date_deb_con, $date_fin_con, $lib_con, $loca_con, $etat_con)
			{
				$this -> id_concours = $id_con;
				$this -> nom_concours = $nom_con;
				$this -> date_debut_concours = $date_deb_con;
				$this -> date_fin_concours = $date_fin_con;
        $this -> date_fin_concours = $date_fin_con;
        $this -> libelle_concours = $lib_con;
				$this -> localisation_concours = $loca_con;
        $this -> etat_concours = $etat_con;
			}

			/* ---------------------- */
			/* fonction concours getalldata */
			/* ---------------------- */

			public function getallconcours()
			{
				$data = $this->id_concours;
				$data = $data.$this->nom_concours;
				$data = $data.$this->date_debut_concours;
				$data = $data.$this->date_fin_concours;
        $data = $data.$this->libelle_concours;
				$data = $data.$this->localisation_concours;
				$data = $data.$this->etat_concours;

				return $data;
			}

			/* ---------------------- */
			/* class Promenade GET */
			/* ---------------------- */

			Public function get_id_concours()
			{
				return $this-> id_concours;
			}

			Public function get_nom_concours ()
			{
				return $this-> nom_concours;
			}

			Public function get_date_debut_concours ()
			{
				return $this-> date_debut_concours;
			}

			Public function get_date_fin_concours ()
			{
				return $this-> date_fin_concours;
			}

      Public function get_libelle_concours ()
      {
        return $this-> libelle_concours;
      }

			Public function get_localisation_concours ()
			{
				return $this-> localisation_concours;
			}


      Public function get_etat_concours ()
      {
				return $this-> etat_concours;
      }


			/* ---------------------- */
			/* class Concours SET */
			/* ---------------------- */

			Public function set_id_concours ($id_con)
			{
				 $this-> id_concours = $id_con;
			}

			Public function set_nom_concours ($nom_con)
			{
				 $this-> nom_concours = $nom_con;
			}

			Public function set_date_debut_concours ($date_deb_con)
			{
				 $this-> date_debut_concours = $date_deb_con;
			}

			Public function set_date_fin_concours ($date_fin_con)
			{
				 $this-> date_fin_concours = $date_fin_con;
			}

			Public function set_localisation_concours ($loca_con)
			{
				 $this-> localisation_concours = $loca_con;
			}

      Public function set_libelle_concours ($lib_con)
      {
         $this-> libelle_concours = $lib_con;
      }

			Public function set_etat_concours ($etat_con)
			{
				 $this-> etat_concours = $etat_con;
			}



			/* ---------------------- */
			/* class Concours fonctions publiques */
			/* ---------------------- */


			Public function ajout_concours ($objet, $conn)
				{
					$id_con = $objet->get_id_concours();
					$nom_con = $objet->get_nom_concours();
					$date_deb_con = $objet->get_date_debut_concours();
					$date_fin_con = $objet->get_date_fin_concours();
					$loca_con = $objet->get_localisation_concours();
          $lib_con =$objet->get_libelle_concours();
					$etat_con = $objet->get_etat_concours();


					print $SQL = " INSERT INTO concours values (NULL, '$nom_con', '$date_deb_con', '$date_fin_con', '$loca_con', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout concours ');
				}

				Public function modif_concours ($objet, $conn)
				{
          $id_con = $objet->get_id_concours();
					$nom_con = $objet->get_nom_concours();
					$date_deb_con = $objet->get_date_debut_concours();
					$date_fin_con = $objet->get_date_fin_concours();
					$loca_con = $objet->get_localisation_concours();
					$etat_con = $objet->get_etat_concours();


					print $SQL = "UPDATE concours SET id_concours = '$id_con', nom_concours  = '$nom_con',
					date_deb_con = '$date_deb_con', date_fin_con = '$date_fin_con', localisation_concours = '$loca_con' WHERE id_concours = '$id_con'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification promenade ');
				}

        Public function suppr_promenade ($objet, $conn)
        {
          $idp = $objet->get_id_promenade();
          print $SQL = "UPDATE concours SET etat_concours = '1'
          WHERE id_concours = '$id_con'";
          $Req = $conn -> query ($SQL) or die (' Erreur suppression concours ');
        }

				Public function affiche_promenade_total($objet, $conn)
				{
          $idp = $objet->get_id_promenade();
					$desc_pro = $objet->get_description_promenade();
					$date_deb_pro = $objet->get_date_debut_promenade();
					$date_fin_pro = $objet->get_date_fin_promenade();
					$localisation = $objet->get_localisation();
					$etat_pro = $objet->get_etat_promenade();

					print $SQL = " SELECT *  From concours WHERE id_concours = '$id_con'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage concours ');
					return $Res = $Req -> fetch ();
				}



	/* ---------------------- */
	/* FIN class Promenade */
	/* ---------------------- */
}
?>
