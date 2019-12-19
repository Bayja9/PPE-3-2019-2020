<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Utilisateur */
	/* ---------------------- */

class chevaux
{
		/* ---------------------- */
		/* class Chevaux Variables */
		/* ---------------------- */

		Private $id_chevaux;
		Private $nom_chevaux;
		Private $dna_chevaux;
		Private $taille_chevaux;
		Private $couleur_chevaux;
    Private $robe_chevaux;
    Private $sexe_chevaux;
    Private $qualite_chevaux;
		Private $poids_chevaux;
		Private $origine_chevaux;
		Private $utilisation_chevaux;
		Private $etat_chevaux;
		Private $note_chevaux;

		/* ---------------------- */
		/* class Chevaux Constructeur */
		/* ---------------------- */

			Public function chevaux ( $id_che, $nom_che, $dna_che, $taille_che, $coul_che, $robe_che, $sexe_che, $qual_che, $poids_che, $note_che, $origin_che, $util_che, $etat_che)
			{
				$this -> id_chevaux = $id_che;
				$this -> nom_chevaux = $nom_che;
				$this -> dna_chevaux = $dna_che;
				$this -> taille_chevaux = $taille_che;
				$this -> couleur_chevaux = $coul_che;
				$this -> robe_chevaux = $robe_che;
        $this -> sexe_chevaux = $sexe_che;
        $this -> qualite_chevaux = $qual_che;
				$this -> poids_chevaux = $poids_che;
				$this -> note_chevaux = $note_che;
				$this -> origine_chevaux = $origin_che;
				$this -> utilisation_chevaux = $util_che;
				$this -> etat_chevaux = $etat_che;

			}

			/* ---------------------- */
			/* class Chevaux GET */
			/* ---------------------- */

			Public function get_id_chevaux()
			{
				return $this-> id_chevaux;
			}

			Public function get_nom_chevaux()
			{
				return $this-> nom_chevaux;
			}

			Public function get_datenaissance_chevaux ()
			{
				return $this-> dna_chevaux;
			}

			Public function  get_taille_chevaux ()
			{
				return $this-> taille_chevaux;
			}

			Public function  get_couleur_chevaux ()
			{
				return $this-> couleur_chevaux;
			}

			Public function  get_robe_chevaux ()
			{
				return $this-> robe_chevaux;
			}

			Public function  get_sexe_chevaux ()
			{
				return $this-> sexe_chevaux;
			}

			Public function  get_qualite_chevaux ()
			{
				return $this-> qualite_chevaux;
			}

			Public function  get_note_chevaux ()
			{
				return $this-> note_chevaux;
			}

			Public function  get_poids_chevaux ()
			{
				return $this-> poids_chevaux;
			}

			Public function  get_origine_chevaux ()
			{
				return $this-> origine_chevaux;
			}

			Public function  get_utilisation_chevaux ()
			{
				return $this-> utilisation_chevaux;
			}

			Public function get_etat_chevaux ()
			{
				return $this-> etat_chevaux;
			}


			/* ---------------------- */
			/* class Chevaux SET */
			/* ---------------------- */

			Public function set_id_chevaux ($id_che)
			{
				 $this-> id_chevaux = $id_che;
			}

			Public function set_nom_chevaux ($nom_che)
			{
				 $this-> nom_chevaux = $nom_che;
			}

			Public function set_dna_chevaux ($dna_che)
			{
				 $this-> dna_chevaux = $dna_che;
			}

			Public function set_taille_chevaux ($taille_che)
			{
				 $this-> taille_chevaux = $taille_che;
			}

			Public function set_couleur_chevaux ($coul_che)
			{
				 $this-> couleur_chevaux = $coul_che;
			}

			Public function set_robe_chevaux ($robe_che)
			{
				 $this-> robe_chevaux = $robe_che;
			}

			Public function set_sexe_chevaux ($sexe_che)
			{
				 $this-> sexe_chevaux = $sexe_che;
			}

			Public function set_qualite_chevaux ($qual_che)
			{
				 $this-> qualite_chevaux = $qual_che;
			}

			Public function set_note_chevaux ($note_che)
			{
				 $this-> note_chevaux = $note_che;
			}

			Public function set_poids_chevaux ($poids_che)
			{
				 $this-> poids_chevaux = $poids_che;
			}

			Public function set_origine_chevaux ($origin_che)
			{
				$this-> origine_chevaux = $origin_che;
			}

			Public function set_utilisation_chevaux ($util_che)
			{
				$this-> utilisation_chevaux = $util_che;
			}

			Public function set_etat_chevaux ($etat_che)
			{
				$this-> etat_chevaux = $etat_che;
			}


			/* ---------------------- */
			/* class Chevaux fonctions publiques */
			/* ---------------------- */


			Public function ajout_chevaux ($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();
					$nom_che = $objet->get_nom_chevaux();
					$dna_che = $objet->get_datenaissance_chevaux();
					$taille_che = $objet->get_taille_chevaux();
					$coul_che = $objet->get_couleur_chevaux();
					$robe_che = $objet->get_robe_chevaux();
					$sexe_che = $objet->get_sexe_chevaux();
					$qual_che = $objet->get_qualite_chevaux();
					$note_che = $objet->get_note_chevaux();
					$poids_che = $objet->get_poids_chevaux();
					$origin_che = $objet->get_origine_chevaux();
					$util_che = $objet->get_utilisation_chevaux();
					$etat_che = $objet->get_etat_chevaux();

					print $SQL = " INSERT INTO chevaux values (NULL, '$nom_che', '$dna_chevaux', '$dna_che', '$taille_che', '$coul_che', '$robe_che', '$sexe_che', '$qual_che', '$note_che', '$poids_che', '$origin_che', '$util_che', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout chevaux ');
				}

				Public function modif_chevaux ($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();
					$nom_che = $objet->get_nom_chevaux();
					$dna_che = $objet->get_datenaissance_chevaux();
					$taille_che = $objet->get_taille_chevaux();
					$coul_che = $objet->get_couleur_chevaux();
					$robe_che = $objet->get_robe_chevaux();
					$sexe_che = $objet->get_sexe_chevaux();
					$qual_che = $objet->get_qualite_chevaux();
					$note_che = $objet->get_note_chevaux();
					$poids_che = $objet->get_poids_chevaux();
					$origin_che = $objet->get_origine_chevaux();
					$util_che = $objet->get_utilisation_chevaux();
					$etat_che = $objet->get_etat_chevaux();

					print $SQL = "UPDATE chevaux SET id_chevaux = '$id_che', nom_chevaux  = '$nom_che',
					dna_chevaux = '$dna_che', taille_chevaux = '$taille_che', couleur_chevaux = '$coul_che',
					robe_chevaux = '$robe_che', sexe_chevaux = '$sexe_che', qualite_chevaux = '$qual_che',
					note_chevaux = '$note_che', poids_chevaux = '$poids_che', origine_chevaux = '$origin_che', utilisation_chevaux = '$util_che'
					WHERE id_chevaux = '$id_che'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification chevaux ');
				}

				Public function affiche_chevaux_total($id_che, $conn)
				{

					print $SQL = " SELECT *  From chevaux WHERE id_chevaux = '$id_che'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage chevaux ');
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
