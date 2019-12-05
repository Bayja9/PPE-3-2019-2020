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

			Public function boxs ($num_boxs, $date_deb_loca, $date_fin_loca, $nb_che_max, $prix_boxs, $etat_boxs)
			{

				$this -> numero_boxs = $num_boxs;
				$this -> date_debut_location = $date_deb_loca;
				$this -> date_fin_location = $date_fin_loca;
        $this -> nombre_chevaux_max = $nb_che_max;
        $this -> prix_boxs = $prix_boxs;
				$this -> etat_boxs = $etat_boxs;

			}

			/* ---------------------- */
			/* fonction Articles getalldata */
			/* ---------------------- */

			public function getallarticles()
			{
				$data = $this->numero_boxs;
				$data = $data.$this->date_debut_location;
				$data = $data.$this->date_fin_location;
        $data = $data.$this->nombre_chevaux_max;
        $data = $data.$this->prix_boxs;
				$data = $data.$this->etat_boxs;

				return $data;
			}

			/* ---------------------- */
			/* class Activites GET */
			/* ---------------------- */

			Public function get_numero_boxs()
			{
				return $this-> num_boxs;
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

      Public function get_prix_boxs ()
      {
        return $this-> prix_boxs;
      }

      Public function get_etat_boxs ()
      {
        return $this-> etat_boxs;
      }

			/* ---------------------- */
			/* class Activites SET */
			/* ---------------------- */

			Public function set_numero_boxs ($num_boxs)
			{
				 $this-> numero_boxs = $num_boxs;
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

      Public function set_prix_boxs ($prix_boxs)
      {
         $this-> prix_boxs = $prix_boxs;
      }

			Public function set_etat_boxs ($etat_boxs)
			{
				 $this-> etat_boxs = $etat_boxs;
			}

			/* ---------------------- */
			/* class Box fonctions publiques */
			/* ---------------------- */


			Public function ajout_box ($objet, $conn)
				{
					$num_boxs = $objet->get_numero_box();
					$date_deb_loca = $objet->get_date_debut_location();
					$date_fin_loca = $objet->get_date_fin_location();
          $nb_che_max = $objet->get_nombre_chevaux_max();
          $prix_box = $objet->get_prix_box();
					$etat_box= $objet->get_etat_box();


					print $SQL = " INSERT INTO boxs values (NULL, '$date_deb_loca', '$date_fin_loca', '$nb_che_max', '$prix_boxs', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout boxs ');
				}

				Public function modif_box ($objet, $conn)
				{
          $num_boxs = $objet->get_numero_boxs();
					$date_deb_loca = $objet->get_date_debut_location();
					$date_fin_loca = $objet->get_date_fin_location();
          $nb_che_max = $objet->get_nombre_chevaux_max();
          $prix_boxs= $objet->get_prix_boxs();
					$etat_boxs= $objet->get_etat_boxs();

					print $SQL = "UPDATE boxs SET id_articles = '$lib_art', lib_articles  = '$lib_art',
          photo_articles  = '$photo_art'
					WHERE id_articles = '$id_art'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification boxs ');
				}

				Public function affiche_articles_total($objet, $conn)
				{
          $num_boxs = $objet->get_numero_boxs();
					$date_deb_loca = $objet->get_date_debut_location();
					$date_fin_loca = $objet->get_date_fin_location();
          $nb_che_max = $objet->get_nombre_chevaux_max();
          $prix_boxs= $objet->get_prix_boxs();
					$etat_boxs= $objet->get_etat_boxs();


					print $SQL = " SELECT * From boxs WHERE num_boxs = '$num_boxs'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage boxs ');
					return $Res = $Req -> fetch ();
				}

				Public function suppr_articles ($objet, $conn)
				{
          $num_boxs = $objet->get_num_boxs();

					print $SQL = "UPDATE boxs SET etat_boxs = '1'
					WHERE num_boxs = '$num_boxs'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression articles ');
				}


	/* ---------------------- */
	/* FIN class articles */
	/* ---------------------- */
}
?>
