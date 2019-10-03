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

			Public function set_sexe_chevaux ($photo_util)
			{
				 $this-> sexe_chevaux = $photo_util;
			}

			Public function set_login_utilisateur ($login_util)
			{
				 $this-> login_utilisateur = $login_util;
			}

			Public function set_mdp_utilisateur($mdp_util)
			{
				 $this-> mdp_utilisateur = $mdp_util;
			}

			Public function set_etat_utilisateur($etat_util)
			{
				 $this-> etat_utilisateur = $etat_util;
			}


			/* ---------------------- */
			/* class Utilisateur fonctions publiques */
			/* ---------------------- */
			Public function ajout_utilisateur ($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$photo_util = $objet->get_photo_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();
					$etat_util = $objet->get_etat_utilisateur();

					print $SQL = " INSERT INTO utilisateur values (NULL, '$nom_util', '$prenom_util', '$tel_util', '$email_util', '$rue_util', '$ville_util', '$cp_util', '$photo_util', '$login_util', '$mdp_util', '0', '1')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout utilisateur ');
				}

				Public function modif_utilisateur ($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$photo_util = $objet->get_photo_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();
					$etat_util = $objet->get_etat_utilisateur();

					print $SQL = "UPDATE utilisateur SET nom_utilisateur = '$nom_util', prenom_utilisateur  = '$prenom_util',
					tel_utilisateur = '$tel_util', email_utilisateur = '$email_util', rue_utilisateur = '$rue_util', ville_utilisateur = '$ville_util',
					cp_utilisateur = '$cp_util', mdp_utilisateur = '$mdp_util' WHERE id_utilisateur = '$id_util'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification utilisateur ');
				}

				Public function affiche_utilisateur_total($objet, $conn)
				{

					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$photo_util = $objet->get_photo_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();
					$etat_util = $objet->get_etat_utilisateur();

					print $SQL = " SELECT *  From utilisateur WHERE id_utilisateur = '$id_util'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage utilisateur ');
					Return $Res = $Req -> fetch ();

				}

				Public function suppr_utilisateur ($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();

					print $SQL = "UPDATE utilisateur SET etat_utilisateur = '1'
					WHERE id_utilisateur = '$id_util'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression utilisateur ');
				}

				Public function suppr_fictive_util($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();

					print $SQL = "UPDATE utilisateur SET etat_utilisateur=1 WHERE $id_util = '$id'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression utilisateur ');
				}

				Public function rajout_suppr_fictive($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();

					print $SQL = "UPDATE utilisateur SET etat_utilisateur='0'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur rajout utilisateur ');
				}

				Public function exp_pro_emploi($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();

					print $SQL = "SELECT * FROM emploi, entreprise, utilisateur
		            WHERE utilisateur.id_utilisateur=$id_util
		            AND emploi.id_utilisateur=utilisateur.id_utilisateur
		            AND entreprise.id_entreprise=emploi.id_entreprise
		            ORDER BY date_crea DESC";
				 	$Req = $conn -> query ($SQL) or die (' Erreur affichage ');
					$Res = $Req -> fetch ();
					return $Res
				}

				Public function exp_pro_stage($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();

					print $SQL = "SELECT * FROM emploi, entreprise, utilisateur
		            WHERE utilisateur.id_utilisateur=$id_util
		            AND emploi.id_utilisateur=utilisateur.id_utilisateur
		            AND entreprise.id_entreprise=emploi.id_entreprise
		            ORDER BY date_crea DESC";
				 	$Req = $conn -> query ($SQL) or die (' Erreur affichage ');
					$Res = $Req -> fetch ();
					return $Res
				}

	/* ---------------------- */
	/* FIN class Utilisateur */
	/* ---------------------- */
}
?>
