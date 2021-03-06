<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Promenade */
	/* ---------------------- */

class promenade
{
		/* ---------------------- */
		/* class Promenade Variables */
		/* ---------------------- */

		Private $id_promenade;
		Private $nom_promenade;
		Private $desc_promenade;
		Private $date_debut_promenade;
		Private $date_fin_promenade;
		Private $localisation;
    Private $etat_promenade;



		/* ---------------------- */
		/* class Promenade Constructeur */
		/* ---------------------- */

			Public function promenade ( $idp, $nom_pro, $desc_pro, $date_deb_pro, $date_fin_pro, $localisation, $etat_pro)
			{
				$this -> id_promenade = $idp;
				$this -> nom_promenade = $desc_pro;
				$this -> desc_promenade = $desc_pro;
				$this -> date_debut_promenade = $date_deb_pro;
				$this -> date_fin_promenade = $date_fin_pro;
				$this -> localisation = $localisation;
        $this -> etat_promenade = $etat_pro;
			}

			/* ---------------------- */
			/* fonction Promenade getalldata */
			/* ---------------------- */

			public function getallpromenade()
			{
				$data = $this->id_promenade;
				$data = $data.$this->nom_promenade;
				$data = $data.$this->desc_promenade;
				$data = $data.$this->date_debut_promenade;
				$data = $data.$this->date_fin_promenade;
				$data = $data.$this->localisation;
				$data = $data.$this->etat_promenade;

				return $data;
			}

			/* ---------------------- */
			/* class Promenade GET */
			/* ---------------------- */

			Public function get_id_promenade()
			{
				return $this-> id_promenade;
			}

			Public function get_nom_promenade ()
			{
				return $this-> nom_promenade;
			}

			Public function get_desc_promenade ()
			{
				return $this-> desc_promenade;
			}

			Public function get_date_debut_promenade ()
			{
				return $this-> date_debut_promenade;
			}

			Public function get_date_fin_promenade ()
			{
				return $this-> date_fin_promenade;
			}

			Public function get_localisation ()
			{
				return $this-> localisation;
			}

      Public function get_etat_promenade ()
      {
				return $this-> etat_promenade;
      }


			/* ---------------------- */
			/* class Promenade SET */
			/* ---------------------- */

			Public function set_id_promenade ($idp)
			{
				 $this-> id_promenade = $idp;
			}

			Public function set_nom_promenade ($nom_pro)
			{
				 $this-> nom_promenade = $nom_pro;
			}

			Public function set_desc_promenade ($desc_pro)
			{
				 $this-> desc_promenade = $desc_pro;
			}

			Public function set_date_debut_promenade ($date_deb_pro)
			{
				 $this-> date_debut_promenade = $date_deb_pro;
			}

			Public function set_date_fin_promenade ($date_fin_pro)
			{
				 $this-> date_fin_promenade = $date_fin_pro;
			}

			Public function set_localisation ($localisation)
			{
				 $this-> localisation = $localisation;
			}

			Public function set_etat_promenade ($etat_pro)
			{
				 $this-> etat_promenade = $etat_pro;
			}



			/* ---------------------- */
			/* class Promenade fonctions publiques */
			/* ---------------------- */


			Public function ajout_promenade ($objet, $conn)
				{
					$idp = $objet->get_id_promenade();
					$nom_pro = $objet->get_nom_promenade();
					$desc_pro = $objet->get_desc_promenade();
					$date_deb_pro = $objet->get_date_debut_promenade();
					$date_fin_pro = $objet->get_date_fin_promenade();
					$localisation = $objet->get_localisation();
					$etat_pro = $objet->get_etat_promenade();


					print $SQL = " INSERT INTO promenade values (NULL, '$nom_pro', '$desc_pro', '$date_deb_pro', '$date_fin_pro', '$localisation', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout promenade ');
				}

				Public function modif_promenade ($objet, $conn)
				{
					$idp = $objet->get_id_promenade();
					$nom_pro = $objet->get_nom_promenade();
					$desc_pro = $objet->get_desc_promenade();
					$date_deb_pro = $objet->get_date_debut_promenade();
					$date_fin_pro = $objet->get_date_fin_promenade();
					$localisation = $objet->get_localisation();
					$etat_pro = $objet->get_etat_promenade();

					print $SQL = "UPDATE promenade SET id_promenade = '$idp', nom_promenade = '$nom_pro' desc_promenade  = '$desc_pro',
					date_deb_pro = '$date_deb_pro', date_fin_pro = '$date_fin_pro', localisation = '$localisation' WHERE id_promenade = '$idp'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification promenade ');
				}

        Public function suppr_promenade ($objet, $conn)
        {
          $idp = $objet->get_id_promenade();
          print $SQL = "UPDATE promenade SET etat_promenade = '1'
          WHERE id_promenade = '$idp'";
          $Req = $conn -> query ($SQL) or die (' Erreur suppression promenade ');
        }

				Public function affiche_promenade_total($objet, $conn)
				{
					$idp = $objet->get_id_promenade();
					$nom_pro = $objet->get_nom_promenade();
					$desc_pro = $objet->get_desc_promenade();
					$date_deb_pro = $objet->get_date_debut_promenade();
					$date_fin_pro = $objet->get_date_fin_promenade();
					$localisation = $objet->get_localisation();
					$etat_pro = $objet->get_etat_promenade();

					print $SQL = " SELECT *  From promenade WHERE id_promenade = '$idp'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage promenade ');
					return $Res = $Req -> fetch ();
				}



	/* ---------------------- */
	/* FIN class Promenade */
	/* ---------------------- */
}
?>
