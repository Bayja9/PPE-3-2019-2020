<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Articles */
	/* ---------------------- */

class articles
{
		/* ---------------------- */
		/* class Article Variables */
		/* ---------------------- */

		Private $id_articles;
		Private $lib_articles;
		Private $photo_articles;
    Private $etat_articles;

		/* ---------------------- */
		/* class Activites Constructeur */
		/* ---------------------- */

			Public function articles ($id_art, $lib_art, $photo_art, $etat_art)
			{

				$this -> id_articles = $id_art;
				$this -> lib_articles = $lib_art;
				$this -> photo_articles = $photo_art;
				$this -> etat_articles = $etat_art;

			}

			/* ---------------------- */
			/* fonction Articles getalldata */
			/* ---------------------- */

			public function getallarticles()
			{
				$data = $this->id_articles;
				$data = $data.$this->lib_articles;
				$data = $data.$this->photo_articles;
				$data = $data.$this->etat_articles;

				return $data;
			}

			/* ---------------------- */
			/* class Activites GET */
			/* ---------------------- */

			Public function get_id_articles ()
			{
				return $this-> id_articles;
			}

			Public function get_lib_articles ()
			{
				return $this-> lib_articles;
			}

			Public function get_photo_articles ()
			{
				return $this-> photo_articles;
			}

      Public function get_etat_articles ()
      {
        return $this-> etat_articles;
      }

			/* ---------------------- */
			/* class Activites SET */
			/* ---------------------- */

			Public function set_id_articles ($id_art)
			{
				 $this-> id_articles = $id_art;
			}

			Public function set_lib_articles($lib_art)
			{
				 $this-> lib_articles = $lib_art;
			}

			Public function set_photo_articles ($photo_art)
			{
				 $this-> photo_articles = $photo_art;
			}

			Public function set_etat_articles ($etat_art)
			{
				 $this-> etat_articles = $etat_art;
			}

			/* ---------------------- */
			/* class Articles fonctions publiques */
			/* ---------------------- */


			Public function ajout_articles ($objet, $conn)
				{
					$id_art = $objet->get_id_articles();
					$lib_art = $objet->get_lib_articles();
					$photo_art = $objet->get_photo_articles();
					$etat_art= $objet->get_etat_articles();


					print $SQL = " INSERT INTO articles values (NULL, '$lib_art', '$photo_art', '$desc_act', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout articles ');
				}

				Public function modif_articles ($objet, $conn)
				{
          $id_art = $objet->get_id_articles();
					$lib_art = $objet->get_lib_articles();
					$photo_art = $objet->get_photo_articles();
					$etat_art= $objet->get_etat_articles();


					print $SQL = "UPDATE articles SET id_articles = '$lib_art', lib_articles  = '$lib_art',
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
