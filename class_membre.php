<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Membre */
	/* ---------------------- */

class membre
{
	/* ---------------------- */
	/* class Membre Variables */
	/* ---------------------- */

		Private $id_membre;
		Private $nom_membre;
		Private $prenom_membre;
		Private $date_de_naissance_membre;
		Private $mail_membre;
		Private $tel_membre;
    Private $login_membre;
    Private $mot_de_passe_membre;
		Private $commentaire_membre;
    Private $etat_membre;


		/* ---------------------- */
		/* class Membre Constructeur */
		/* ---------------------- */

			Public function membre ( $idm, $nom_mem, $pre_mem, $dna_mem, $mail_mem, $tel_mem, $log_mem, $mdp_membre, $etat_mem)
			{
				$this -> id_membre = $idm;
				$this -> nom_membre = $nom_mem;
				$this -> prenom_membre = $pre_mem;
				$this -> date_de_naissance_membre = $dna_mem;
				$this -> mail_membre = $mail_mem;
				$this -> telephone_membre = $tel_mem;
				$this -> login_membre = $log_mem;
        $this -> mot_de_passe_membre = $mdp_mem;
				$this -> commentaire_membre = $comm_mem;
        $this -> etat_membre = $etat_mem;
			}

			/* ---------------------- */
			/* fonction Membre getalldata */
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
			/* class Membre GET */
			/* ---------------------- */

			Public function get_id_membre ()
			{
				return $this-> id_membre;
			}

			Public function get_nom_membre ()
			{
				return $this-> nom_membre;
			}

			Public function get_prenom_membre ()
			{
				return $this-> prenom_membre;
			}

			Public function  get_datenaissance_membre ()
			{
				return $this-> dna_membre;
			}

			Public function  get_mail_membre ()
			{
				return $this-> mail_membre;
			}

			Public function  get_telephone_membre ()
			{
				return $this-> telephone_membre;
			}

			Public function  get_login_membre ()
			{
				return $this-> login_membre;
			}

			Public function  get_mot_de_passe_membre ()
			{
				return $this-> mot_de_passe_membre;
			}

			Public function  get_commentaire_membre ()
			{
				return $this-> commentaire_membre;
			}

      Public function  get_etat_membre ()
			{
				return $this-> etat_membre;
			}

			/* ---------------------- */
			/* class Membre SET */
			/* ---------------------- */

			Public function set_id_membre ($idm)
			{
				 $this-> id_membre = $idm;
			}

			Public function set_nom_membre ($nom_mem)
			{
				 $this-> nom_membre = $nom_mem;
			}

			Public function set_prenom_membre ($pre_mem)
			{
				 $this-> prenom_membre = $pre_mem;
			}

			Public function set_datenaissance_membre ($dna_mem)
			{
				 $this-> date_de_naissance_membre = $dna_mem;
			}

			Public function set_mail_membre ($mail_mem)
			{
				 $this-> mail_membre = $mail_mem;
			}

			Public function set_telephone_membre ($tel_mem)
			{
				 $this-> telephone_membre = $tel_mem;
			}

			Public function set_login_membre ($log_mem)
			{
				 $this-> login_membre = $log_mem;
			}

			Public function set_mot_de_passe_membre ($mdp_mem)
			{
				 $this-> mot_de_passe_membre = $mdp_mem;
			}

			Public function set_commentaire_membre ($comm_mem)
			{
				$this-> commentaire_membre = $comm_mem;
			}

      Public function set_etat_membre ($etat_mem)
      {
         $this-> etat_membre = $etat_mem;
      }


			/* ---------------------- */
			/* class Membre fonctions publiques */
			/* ---------------------- */


			Public function ajout_membre ($objet, $conn)
				{
					$idm = $objet->get_id_membre();
					$nom_mem = $objet->get_nom_membre();
					$pre_mem = $objet->get_prenom_membre();
					$dna_che = $objet->get_datenaissance_membre();
					$mail_mem = $objet->get_mail_membre();
					$tel_mem = $objet->get_telephone_membre();
					$log_mem = $objet->get_login_membre();
					$mdp_mem = $objet->get_mot_de_passe_membre();
					$comm_mem =$objet->get_commentaire_membre();
          $etat_mem = $objet->get_etat_membre();


					print $SQL = "INSERT INTO membre values (NULL, '$nom_mem', '$pre_mem', '$dna_che', '$mail_mem', '$tel_mem', '$log_mem', '$mdp_mem', '$comm_mem', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout membre ');
				}

				Public function modif_membre ($objet, $conn)
				{
          $idm = $objet->get_id_membre();
					$nom_mem = $objet->get_nom_membre();
					$pre_mem = $objet->get_prenom_membre();
					$dna_che = $objet->get_datenaissance_membre();
					$mail_mem = $objet->get_mail_membre();
					$tel_mem = $objet->get_telephone_membre();
					$log_mem = $objet->get_login_membre();
					$mdp_membre = $objet->get_mot_de_passe_membre();
					$comm_mem =$objet->get_commentaire_membre();


					print $SQL = "UPDATE membre SET id_membre = '$idm', nom_mem  = '$nom_mem',
					prenom_membre = '$pre_mem', date_de_naissance_membre = '$dna_che', mail_membre = '$mail_mem',
          telephone_membre = '$tel_mem', login_membre = '$log_mem', mot_de_passe_membre = '$mdp_membre', commentaire_membre = '$comm_mem'	WHERE id_membre = '$idm'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification membre ');
				}

        Public function suppr_membre ($objet, $conn)
        {
          $idm = $objet->get_id_membre();

          print $SQL = "UPDATE membre SET etat_membre = '1'
          WHERE id_membre = '$idm'";
          $Req = $conn -> query ($SQL) or die (' Erreur suppression membre ');
        }

				Public function affiche_membre_total($objet, $conn)
				{
          $idm = $objet->get_id_membre();
					$nom_mem = $objet->get_nom_membre();
					$pre_mem = $objet->get_prenom_membre();
					$dna_che = $objet->get_datenaissance_membre();
					$mail_mem = $objet->get_mail_membre();
					$tel_mem = $objet->get_telephone_membre();
					$log_mem = $objet->get_login_membre();
					$mdp_membre = $objet->get_mot_de_passe_membre();
					$comm_mem =$objet->get_commentaire_membre();

					print $SQL = " SELECT *  From membre WHERE id_membre= '$idm'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage utilisateur ');
					return $Res = $Req -> fetch ();
				}




	/* ---------------------- */
	/* FIN class Membre */
	/* ---------------------- */
}
?>
