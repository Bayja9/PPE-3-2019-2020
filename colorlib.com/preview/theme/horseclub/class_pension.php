<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class pension */
	/* ---------------------- */

class pension
{
		/* ---------------------- */
		/* class Pension Variables */
		/* ---------------------- */

		Private $id_pension;
		Private $date_debut_pension;
		Private $date_fin_pension;
		Private $lib_pension;
    Private $etat_pension;

		/* ---------------------- */
		/* class Pension Constructeur */
		/* ---------------------- */

			Public function pension ($idp, $date_debut_p, $date_fin_p, $lib_p, $etat_p)
			{

				$this -> id_pension = $idp;
				$this -> date_debut_pension = $date_debut_p;
				$this -> date_fin_pension = $date_fin_p;
				$this -> lib_pension = $lib_p;
				$this -> etat_pension = $etat_p;

			}

			/* ---------------------- */
			/* fonction Pension getalldata */
			/* ---------------------- */

			public function getallpension()
			{
				$data = $this->id_pension;
				$data = $data.$this->date_debut_pension;
				$data = $data.$this->date_fin_pension;
				$data = $data.$this->lib_pension;

				return $data;
			}

			/* ---------------------- */
			/* class Pension GET */
			/* ---------------------- */

			Public function get_id_pension ()
			{
				return $this-> id_pension;
			}

			Public function get_date_debut_pension ()
			{
				return $this-> date_debut_pension;
			}

			Public function get_date_fin_pension ()
			{
				return $this-> date_fin_pension;
			}

			Public function  get_lib_pension ()
			{
				return $this-> lib_pension;
			}

      Public function  get_etat_pension ()
			{
				return $this-> etat_pension;
			}



			/* ---------------------- */
			/* class Activites SET */
			/* ---------------------- */

			Public function set_id_pension ($idp)
			{
				 $this-> id_pension = $idp;
			}

			Public function set_date_debut_pension ($date_debut_p)
			{
				 $this-> date_debut_pension = $date_debut_p;
			}

			Public function set_date_fin_pension ($date_fin_p)
			{
				 $this-> date_fin_pension = $date_fin_p;
			}

			Public function set_lib_pension ($lib_p)
			{
				 $this-> lib_pension = $lib_p;
			}

      Public function set_etat_pension ($etat_p)
      {
         $this-> etat_pension = $etat_p;
      }


			/* ---------------------- */
			/* class Pension fonctions publiques */
			/* ---------------------- */


			Public function ajout_pension ($objet, $conn)
				{
					$idp = $objet->get_id_pension();
					$date_debut_p = $objet->get_date_debut_pension();
					$date_fin_p = $objet->get_date_fin_pension();
					$lib_p = $objet->get_lib_pension();
					$etat_p = $objet->get_etat_pension();


					print $SQL = " INSERT INTO pension values (NULL, '$date_debut_p', '$date_fin_p', '$lib_p', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout pension ');
				}

				Public function modif_pension ($objet, $conn)
				{
					$idp = $objet->get_id_pension();
					$date_debut_p = $objet->get_date_debut_pension();
					$date_fin_p = $objet->get_date_fin_pension();
					$lib_p = $objet->get_lib_pension();
					$etat_p = $objet->get_etat_pension();


					print $SQL = "UPDATE pension SET id_pension = '$idp', date_debut_pension  = '$date_debut_p',
					date_fin_pension = '$date_fin_p', lib_pension = '$lib_p'
					WHERE id_pension = '$idp'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification pension ');
				}

				Public function affiche_pension_total($objet, $conn)
				{
					$idp = $objet->get_id_pension();
					$date_debut_p = $objet->get_date_debut_pension();
					$date_fin_p = $objet->get_date_fin_pension();
					$lib_p = $objet->get_lib_pension();
					$etat_p = $objet->get_etat_pension();

					print $SQL = " SELECT * From pension WHERE id_pension = '$idp'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage pension ');
					return $Res = $Req -> fetch ();
				}

				Public function suppr_pension ($objet, $conn)
				{
					$id_act = $objet->get_id_pension();

					print $SQL = "UPDATE pension SET etat_pension = '1'
					WHERE id_pension = '$idp'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression pension ');
				}


	/* ---------------------- */
	/* FIN class Activites */
	/* ---------------------- */
}
?>
