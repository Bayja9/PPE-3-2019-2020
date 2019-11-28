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
		Private $age_cavalier;
    Private $un_galop; // objet de type galop
    Private $mes_chevaux; // collection de chevaux

		/* ---------------------- */
		/* class Utilisateur Constructeur */
		/* ---------------------- */

			Public function cavalier ($idc, $n, $p, $idg, $libg)
			{

				$this -> id_cavalier = $idc;
				$this -> nom_cavalier = $n;
        $this -> prenom_cavalier = $p;
        $this -> nom_cavalier = $n;
        $galop = new galop ($idg, $libg);
        $this -> un_galop = $galop;
        $this -> meschevaux ='';

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

			Public function get_un_galop ()
			{
				return $this-> un_galop;
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




			/* ---------------------- */
			/* class Chevaux fonctions publiques */
			/* ---------------------- */


			Public function ajout_chevaux ($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();
					$nom_che = $objet->get_nom_chevaux();


					print $SQL = " INSERT INTO chevaux values (NULL, '$nom_che', '$dna_chevaux', '$dna_che', '$taille_che', '$age_che', '$coul_che', '$robe_che', '$sexe_che', '$qual_che', '$poids_che', '$origin_che', '$util_che', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout chevaux ');
				}

				Public function modif_chevaux ($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();
					$nom_che = $objet->get_nom_chevaux();

					print $SQL = "UPDATE chevaux SET id_chevaux = '$id_che', nom_chevaux  = '$nom_che',
					dna_chevaux = '$dna_che', taille_chevaux = '$taille_che', age_chevaux = '$age_che', couleur_chevaux = '$coul_che',
					robe_chevaux = '$robe_che', sexe_chevaux = '$sexe_che', qualite_chevaux = '$qual_che', poids_chevaux = '$poids_che', origine_chevaux = '$origin_che', utilisation_chevaux = '$util_che'
					WHERE id_chevaux = '$id_che'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification chevaux ');
				}

				Public function affiche_chevaux_total($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();
					$nom_che = $objet->get_nom_chevaux();


					print $SQL = " SELECT *  From chevaux WHERE id_chevaux = '$id_che'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage utilisateur ');
					return $Res = $Req -> fetch ();
				}

				Public function suppr_chevaux ($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();

					print $SQL = "UPDATE chevaux SET etat_chevaux = '1'
					WHERE id_chevaux = '$id_che'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression chevaux ');
				}


	/* ---------------------- */
	/* FIN class Chevaux */
	/* ---------------------- */
}
?>
