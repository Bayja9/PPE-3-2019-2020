<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Galop */
	/* ---------------------- */

class galop
{
		/* ---------------------- */
		/* class Galop Variables */
		/* ---------------------- */

		Private $id_galop;
    Private $date_obtention_galop;
		Private $nom_galop;
		Private $etat_galop;


		/* ---------------------- */
		/* class Galop Constructeur */
		/* ---------------------- */

			Public function galop ( $idg, $nom_gal, $etat_gal)
			{
				$this -> id_galop = $idg;
        $this -> date_obtention_galop = $dat_obt_gal;
				$this -> nom_galop = $nom_gal;
				$this -> etat_galop = $etat_gal;
			}

			/* ---------------------- */
			/* fonction Galop getalldata */
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
			/* class Galop GET */
			/* ---------------------- */

			Public function get_id_galop ()
			{
				return $this-> id_galop;
			}

      Public function get_date_obtention_galop ()
      {
        return $this-> date_obtention_galop;
      }

			Public function get_nom_galop ()
			{
				return $this-> nom_galop;
			}

			Public function get_etat_galop ()
			{
				return $this-> dna_chevaux;
			}

			/* ---------------------- */
			/* class Galop SET */
			/* ---------------------- */

			Public function set_id_galop ($idg)
			{
				 $this-> id_galop = $idg;
			}

			Public function set_date_obtention_galop ($dat_obt_gal)
			{
				 $this-> date_obtention_galop = $dat_obt_gal;
			}

			Public function set_nom_galop ($nom_gal)
			{
				 $this-> nom_galop = $nom_gal;
			}

			Public function set_etat_galop ($etat_gal)
			{
				 $this-> etat_galop = $etat_gal;
			}



			/* ---------------------- */
			/* class Galop fonctions publiques */
			/* ---------------------- */


			Public function ajout_galop ($objet, $conn)
				{
					$idg = $objet->get_id_galop();
					$dat_obt_gal = $objet->get_date_obtention_galop();
					$nom_galop = $objet->get_nom_galop();
					$etat_galop = $objet->get_etat_galop();


					print $SQL = " INSERT INTO galop values (NULL, '$dat_obt_gal', '$nom_galop', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout galop ');
				}

				Public function modif_galop ($objet, $conn)
				{
          $idg = $objet->get_id_galop();
					$dat_obt_gal = $objet->get_date_obtention_galop();
					$nom_galop = $objet->get_nom_galop();
					$etat_galop = $objet->get_etat_galop();

					print $SQL = "UPDATE galop SET id_galop = '$idg', date_obtention_galop  = '$dat_obt_gal',
					nom_galop = '$nom_gal' WHERE id_galop = '$idg'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification galop ');
				}

        Public function suppr_galop ($objet, $conn)
        {
          $idg = $objet->get_id_galop();

          print $SQL = "UPDATE galop SET etat_galop = '1'
          WHERE id_galop = '$idg'";
          $Req = $conn -> query ($SQL) or die (' Erreur suppression galop ');
        }



				Public function affiche_galop_total($objet, $conn)
				{
          $idg = $objet->get_id_galop();
					$dat_obt_gal = $objet->get_date_obtention_galop();
					$nom_galop = $objet->get_nom_galop();
					$etat_galop = $objet->get_etat_galop();


					print $SQL = " SELECT *  From galop WHERE id_galop = '$idg'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage galop ');
					return $Res = $Req -> fetch ();
				}


	/* ---------------------- */
	/* FIN class Galop */
	/* ---------------------- */
}
?>
