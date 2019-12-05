<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Box */
	/* ---------------------- */

class box
{
		/* ---------------------- */
		/* class Box Variables */
		/* ---------------------- */

		Private $numero_boxs;
		Private $date_debut_location;
		Private $date_fin_location;
    Private $nombre_chevaux_max;
    Private $prix_boxs;
    Private $etat_boxs;

		/* ---------------------- */
		/* class Activites Constructeur */
		/* ---------------------- */

			Public function boxs ($num_box, $lib_art, $photo_art, $etat_art)
			{

				$this -> numero_boxs = $num_box;
				$this -> date_debut_location = $date_deb_loca;
				$this -> date_fin_location = $date_fin_loca;
        $this -> nombre_chevaux_max = $nb_che_max;
        $this -> prix_box = $prix_boxs;
				$this -> etat_articles = $etat_boxs;

			}

			/* ---------------------- */
			/* fonction Articles getalldata */
			/* ---------------------- */

			public function getallarticles()
			{
				$data = $this->numero_box;
				$data = $data.$this->date_debut_location;
				$data = $data.$this->date_fin_location;
        $data = $data.$this->nombre_chevaux_max;
        $data = $data.$this->prix_box;
				$data = $data.$this->etat_box;

				return $data;
			}

			/* ---------------------- */
			/* class Activites GET */
			/* ---------------------- */

			Public function get_num_box ()
			{
				return $this-> num_box;
			}

			Public function get_date_debut_location ()
			{
				return $this-> date_debut_location;
			}

			Public function get_date_fin_location ()
			{
				return $this-> date_fin_location;
			}

      Public function get_nombre_chevaux_max ()
      {
        return $this-> nombre_chevaux_max;
      }

      Public function get_prix_box ()
      {
        return $this-> date_fin_location;
      }

      Public function get_etat_box ()
      {
        return $this-> etat_box;
      }

			/* ---------------------- */
			/* class Activites SET */
			/* ---------------------- */

			Public function set_num_box ($num_box)
			{
				 $this-> numero_box = $num_box;
			}

			Public function set_date_debut_location($date_deb_loca)
			{
				 $this-> date_debut_location = $date_deb_loca;
			}

			Public function set_date_fin_location ($date_fin_loca)
			{
				 $this-> date_fin_location = $date_fin_loca;
			}

      Public function set_nombre_chevaux_max ($nb_che_max)
      {
         $this-> nombre_chevaux_max = $nb_che_max;
      }

      Public function set_prix_box ($prix_box)
      {
         $this-> prix_box = $prix_box;
      }

			Public function set_etat_box ($etat_box)
			{
				 $this-> etat_box = $etat_box;
			}

			/* ---------------------- */
			/* class Box fonctions publiques */
			/* ---------------------- */


			Public function ajout_box ($objet, $conn)
				{
					$num_box = $objet->get_numero_box();
					$date_deb_loca = $objet->get_date_debut_location();
					$date_fin_loca = $objet->get_date_fin_location();
          $nb_che_max = $objet->get_nombre_chevaux_max();
          $prix_box = $objet->get_prix_box();
					$etat_box= $objet->get_etat_box();


					print $SQL = " INSERT INTO boxs values (NULL, '$date_deb_loca', '$date_fin_loca', '$nb_che_max', '$prix_box', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout articles ');
				}

				Public function modif_box ($objet, $conn)
				{
          $num_box = $objet->get_numero_box();
					$date_deb_loca = $objet->get_date_debut_location();
					$date_fin_loca = $objet->get_date_fin_location();
          $nb_che_max = $objet->get_nombre_chevaux_max();
          $prix_box = $objet->get_prix_box();
					$etat_box= $objet->get_etat_box();

					print $SQL = "UPDATE box SET id_articles = '$lib_art', lib_articles  = '$lib_art',
          photo_articles  = '$photo_art'
					WHERE id_articles = '$id_art'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification articles ');
				}

				Public function affiche_articles_total($objet, $conn)
				{
          $id_art = $objet->get_id_articles();
					$lib_art = $objet->get_lib_articles();
					$photo_art = $objet->get_photo_articles();
					$etat_art= $objet->get_etat_articles();


					print $SQL = " SELECT * From articles WHERE id_articles = '$id_art'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage articles ');
					return $Res = $Req -> fetch ();
				}

				Public function suppr_articles ($objet, $conn)
				{
          $id_art = $objet->get_id_articles();

					print $SQL = "UPDATE articles SET etat_articles = '1'
					WHERE id_articles = '$id_art'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression articles ');
				}


	/* ---------------------- */
	/* FIN class articles */
	/* ---------------------- */
}
?>
