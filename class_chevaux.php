<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Utilisateur */
	/* ---------------------- */

class chevaux
{
		/* ---------------------- */
		/* class Utilisateur Variables */
		/* ---------------------- */

		Private $id_chevaux;
		Private $nom_chevaux;
		Private $dna_chevaux;
		Private $taille_chevaux;
		Private $age_chevaux;
		Private $couleur_chevaux;
    Private $robe_chevaux;
    Private $sexe_chevaux;
    Private $qualite_chevaux;


		/* ---------------------- */
		/* class Utilisateur Constructeur */
		/* ---------------------- */

			Public function chevaux ( $id_che, $nom_che, $dna_che, $taille_che, $age_che, $couleur_che, $robe_che, $sexe_che)
			{
				$this -> id_chevaux = $id_che;
				$this -> nom_chevaux = $nom_che;
				$this -> dna_chevaux = $dna_che;
				$this -> taille_chevaux = $taille_che;
				$this -> age_chevaux = $age_che;
				$this -> couleur_chevaux = $coul_che;
				$this -> robe_chevaux = $robe_che;
        $this -> sexe_chevaux = $sexe_che;
        $this -> qualite_chevaux = $qual_che;
			}

			/* ---------------------- */
			/* fonction Utilisateur getalldata */
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
			/* class Utilisateur GET */
			/* ---------------------- */

			Public function get_id_chevaux ()
			{
				return $this-> id_chevaux;
			}

			Public function get_nom_chevaux ()
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

			Public function  get_age_chevaux ()
			{
				return $this-> age_chevaux;
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


			/* ---------------------- */
			/* class Utilisateur SET */
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

			Public function set_age_chevaux ($age_che)
			{
				 $this-> age_chevaux = $age_che;
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


			/* ---------------------- */
			/* class Chevaux fonctions publiques */
			/* ---------------------- */


			Public function ajout_chevaux ($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();
					$nom_che = $objet->get_nom_chevaux();
					$dna_che = $objet->get_datenaissance_chevaux();
					$taille_che = $objet->get_taille_chevaux();
					$age_che = $objet->get_age_chevaux();
					$coul_che = $objet->get_couleur_chevaux();
					$robe_che = $objet->get_robe_chevaux();
					$sexe_che = $objet->get_sexe_chevaux();
					$qual_che = $objet->get_qualite_chevaux();


					print $SQL = " INSERT INTO chevaux values (NULL, '$nom_chevaux', '$dna_chevaux', '$taille_chevaux', '$age_chevaux', '$couleur_chevaux')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout chevaux ');
				}

				Public function modif_chevaux ($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();
					$nom_che = $objet->get_nom_chevaux();
					$dna_che = $objet->get_datenaissance_chevaux();
					$taille_che = $objet->get_taille_chevaux();
					$age_che = $objet->get_age_chevaux();
					$coul_che = $objet->get_couleur_chevaux();
					$robe_che = $objet->get_robe_chevaux();
					$sexe_che = $objet->get_sexe_chevaux();
					$qual_che = $objet->get_qualite_chevaux();

					print $SQL = "UPDATE chevaux SET id_chevaux = '$id_che', nom_chevaux  = '$nom_che',
					dna_chevaux = '$dna_che', taille_chevaux = '$taille_che', age_chevaux = '$age_che', couleur_chevaux = '$coul_che',
					robe_chevaux = '$robe_che', sexe_chevaux = '$sexe_che', qualite_chevaux = '$qual_che' WHERE id_chevaux = '$id_che'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification chevaux ');
				}

				Public function affiche_chevaux_total($objet, $conn)
				{
					$id_che = $objet->get_id_chevaux();
					$nom_che = $objet->get_nom_chevaux();
					$dna_che = $objet->get_datenaissance_chevaux();
					$taille_che = $objet->get_taille_chevaux();
					$age_che = $objet->get_age_chevaux();
					$coul_che = $objet->get_couleur_chevaux();
					$robe_che = $objet->get_robe_chevaux();
					$sexe_che = $objet->get_sexe_chevaux();
					$qual_che = $objet->get_qualite_chevaux();

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
