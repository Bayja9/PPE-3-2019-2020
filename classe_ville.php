<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Ville */
	/* ---------------------- */

class ville
{
		/* ---------------------- */
		/* class Ville Variables */
		/* ---------------------- */

		Private $ville_id;
		Private $ville_departement;
		Private $ville_nom;
		Private $ville_code_postal;
		Private $ville_code_commune;
		Private $ville_arrondissement;

		/* ---------------------- */
		/* class Ville Constructeur */
		/* ---------------------- */

			Public function ville ( $id_che, $nom_che, $dna_che, $taille_che, $age_che, $couleur_che, $robe_che, $sexe_che, $qual_che, $etat_che)
			{
				$this -> ville_id = $id_ville;
				$this -> ville_departement = $dep_ville;
				$this -> ville_nom = $nom_ville;
				$this -> ville_code_postal = $cp_ville;
				$this -> ville_code_commune = $code_comm_ville;
				$this -> ville_arrondissement = $arron_ville;
			}

			/* ---------------------- */
			/* fonction Ville getalldata */
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
			/* class Ville GET */
			/* ---------------------- */

			Public function get_id_ville ()
			{
				return $this-> ville_id;
			}

			Public function get_departement_ville ()
			{
				return $this-> ville_departement;
			}

			Public function get_nom_ville ()
			{
				return $this-> ville_nom;
			}

			Public function  get_code_postal_ville ()
			{
				return $this-> ville_code_postal;
			}

			Public function  get_code_commune_ville()
			{
				return $this-> ville_code_commune;
			}

			Public function  get_arrondissement_ville()
			{
				return $this-> ville_arrondissement;
			}


			/* ---------------------- */
			/* class Ville SET */
			/* ---------------------- */

			Public function set_id_ville ($id_ville)
			{
				 $this-> ville_id = $id_ville;
			}

			Public function set_departement_ville ($dep_ville)
			{
				 $this-> ville_departement = $dep_ville;
			}

			Public function set_nom_ville ($nom_ville)
			{
				 $this-> ville_nom = $nom_ville;
			}

			Public function set_code_postal_ville ($cp_ville)
			{
				 $this-> ville_code_postal = $cp_ville;
			}

			Public function set_code_commune_ville ($code_comm_ville)
			{
				 $this-> ville_code_postal = $code_comm_ville;
			}

			Public function set_arrondissement_ville ($arron_ville)
			{
				 $this-> ville_arrondissement = $arron_ville;
			}


			/* ---------------------- */
			/* class Ville fonctions publiques */
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
					$etat_che = $objet->get_etat_chevaux();


					print $SQL = " INSERT INTO chevaux values (NULL, '$nom_che', '$dna_chevaux', '$dna_che', '$taille_che', '$age_che', '$coul_che', '$robe_che', '$sexe_che', '$qual_che', '0')";
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
					$etat_che = $objet->get_etat_chevaux();

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
					$etat_che = $objet->get_etat_chevaux();

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
	/* FIN class Ville */
	/* ---------------------- */
}
?>
