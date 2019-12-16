<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Utilisateur */
	/* ---------------------- */

class cavalier
{
		/* ---------------------- */
		/* class Utilisateur Variables */
		/* ---------------------- */

		Private $id_cavalier;
		Private $nom_cavalier;
		Private $prenom_cavalier;
		Private $dna_cavalier;
    Private $un_galop; // objet de type galop
    Private $mes_chevaux; // collection de chevaux

		/* ---------------------- */
		/* class Utilisateur Constructeur */
		/* ---------------------- */

			Public function cavalier ($idc, $n, $p, $dna, $idg, $libg)
			{

				$this -> id_cavalier = $id_cav;
				$this -> nom_cavalier = $n;
        $this -> prenom_cavalier = $p;
        $this -> dna_cavalier = $dna;
        $galop = new galop ($idg, $libg);
        $this -> un_galop = $galop;
        $this -> meschevaux ='';
				$this -> etat_cavalier =$etat_cav;

			}

			/* ---------------------- */
			/* class Utilisateur GET */
			/* ---------------------- */

			Public function get_id_cavalier ()
			{
				return $this-> id_cavalier;
			}

			Public function get_prenom_cavalier ()
			{
				return $this-> prenom_cavalier;
			}

      Public function get_nom_cavalier ()
			{
				return $this-> nom_cavalier;
			}

			Public function get_dna_cavalier ()
			{
				return $this-> dna_cavalier;
			}

			Public function get_un_galop ()
			{
				return $this-> un_galop;
			}

			Public function get_etat_cavalier ()
			{
				return $this-> etat_cavalier;
			}



			/* ---------------------- */
			/* class Utilisateur SET */
			/* ---------------------- */

			Public function set_id_cavalier ($idc)
			{
				 $this-> id_cavalier = $idc;
			}

			Public function set_prenom_cavalier ($p)
			{
				 $this-> prenom_cavalier = $p;
			}

      Public function set_nom_cavalier ($n)
      {
         $this-> nom_cavalier = $n;
      }

			Public function set_dna_cavalier ($dna)
			{
				 $this-> dna_cavalier = $dna;
			}

			public function set_etat_cavalier ($etat_cav)
			{
				 $this-> etat_cavalier = $etat_cav;
			}

			/* ---------------------- */
			/* class Chevaux fonctions publiques */
			/* ---------------------- */


			Public function ajout_cavalier ($objet, $conn)
				{
					$id_cav = $objet->get_id_cavalier();
					$n = $objet->get_nom_cavalier();
					$p = $objet->get_prenom_cavalier();
					$dna = $objet->get_dna_cavalier();
					$etat_cav = $objet->get_etat_cavalier();


					print $SQL = " INSERT INTO cavalier values (NULL, '$n', '$p', '$dna','0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout cavalier ');
				}

				Public function modif_cavalier ($objet, $conn)
				{
					$id_cav = $objet->get_id_cavalier();
					$n = $objet->get_nom_cavalier();
					$p = $objet->get_prenom_cavalier();
					$dna = $objet->get_dna_cavalier();
					$etat_cav = $objet->get_etat_cavalier();


					print $SQL = "UPDATE cavalier SET id_cavalier = '$id_cav', nom_cavalier  = '$n',
					prenom_cavalier = '$p', dna_cavalier = '$dna'
					WHERE id_cavalier = '$id_cav'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification cavalier ');
				}

				Public function affiche_cavalier_total($objet, $conn)
				{
					$id_cav = $objet->get_id_cavalier();
					$n = $objet->get_nom_cavalier();
					$p = $objet->get_prenom_cavalier();


					print $SQL = " SELECT * FROM cavalier WHERE id_cavalier = '$id_cav'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage cavalier ');
					return $Res = $Req -> fetch ();
				}

				Public function suppr_cavalier ($objet, $conn)
				{
					$id_cav = $objet->get_id_cavalier();

					print $SQL = "UPDATE cavalier SET etat_cavalier = '1'
					WHERE id_cavalier = '$id_cav'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression cavalier ');
				}


	/* ---------------------- */
	/* FIN class Chevaux */
	/* ---------------------- */
}
?>
