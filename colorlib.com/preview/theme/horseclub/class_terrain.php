<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Terrain */
	/* ---------------------- */

class terrain
{
		/* ---------------------- */
		/* class Terrain Variables */
		/* ---------------------- */

		Private $id_terrain;
		Private $nom_terrain;
		Private $surface_terrain;
		Private $type_terrain;
    Private $etat_terrain;

		/* ---------------------- */
		/* class Terrain Constructeur */
		/* ---------------------- */

			Public function terrain ($id_terr, $nom_terr, $surf_terr, $type_terr, $etat_terr)
			{

				$this -> id_terrain = $id_terr;
				$this -> nom_terrain = $nom_terr;
				$this -> surface_terrain = $surf_terr;
				$this -> type_terrain = $type_terr;
        $this -> etat_terrain = $etat_terr;
			}

			/* ---------------------- */
			/* fonction Terrain getalldata */
			/* ---------------------- */

			public function getallterrain()
			{
				$data = $this->id_terrain;
				$data = $data.$this->nom_terrain;
				$data = $data.$this->surface_terrain;
				$data = $data.$this->type_terrain;
        $data = $data.$this->etat_terrain;


				return $data;
			}

			/* ---------------------- */
			/* class Terrain GET */
			/* ---------------------- */

			Public function get_id_terrain ()
			{
				return $this-> id_terrain;
			}

			Public function get_nom_terrain ()
			{
				return $this-> nom_terrain;
			}

			Public function get_surface_terrain ()
			{
				return $this-> surface_terrain;
			}

			Public function  get_type_terrain ()
			{
				return $this-> type_terrain;
			}

      Public function  get_etat_terrain ()
			{
				return $this-> etat_terrain;
			}



			/* ---------------------- */
			/* class Terrain SET */
			/* ---------------------- */

			Public function set_id_terrain ($id_terr)
			{
				 $this-> id_terrain = $id_terr;
			}

			Public function set_nom_terrain ($nom_terr)
			{
				 $this-> nom_terrain = $nom_terr;
			}

			Public function set_surface_terrain ($surf_terr)
			{
				 $this-> surface_terrain = $surf_terr;
			}

			Public function set_type_terrain ($type_terr)
			{
				 $this-> type_terrain = $type_terr;
			}

      Public function set_etat_terrain ($etat_terr)
      {
         $this-> etat_terrain = $etat_terr;
      }


			/* ---------------------- */
			/* class Terrain fonctions publiques */
			/* ---------------------- */


			Public function ajout_terrain ($objet, $conn)
				{
					$id_terr = $objet->get_id_terrain();
					$nom_terr = $objet->get_nom_terrain();
					$surf_terr = $objet->get_surface_terrain();
					$type_terr = $objet->get_type_terrain();
					$etat_terr = $objet->get_etat_terrain();


					print $SQL = " INSERT INTO terrain values (NULL, '$id_terr', '$nom_terr', '$surf_terr', '$type_terr', '$etat_terr', '0')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout activites ');
				}

				Public function modif_terrain ($objet, $conn)
				{
					$id_terr = $objet->get_id_terrain();
					$nom_terr = $objet->get_nom_terrain();
					$surf_terr = $objet->get_surface_terrain();
					$type_terr = $objet->get_type_terrain();
					$etat_terr = $objet->get_etat_terrain();


					print $SQL = "UPDATE terrain SET id_terrain = '$id_terr', nom_terrain  = '$nom_terr',
					surface_terrain = '$surf_terr', type_terrain = '$type_terr'
					WHERE id_terrain = '$id_terr'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification terrain ');
				}

				Public function affiche_terrain_total($objet, $conn)
				{
					$id_terr = $objet->get_id_terrain();
					$nom_terr = $objet->get_nom_terrain();
					$surf_terr = $objet->get_surface_terrain();
					$type_terr = $objet->get_type_terrain();
					$etat_terr = $objet->get_etat_terrain();
					print $SQL = " SELECT * From terrain WHERE id_terrain = '$id_terr'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage terrain ');
					return $Res = $Req -> fetch ();
				}

				Public function suppr_terrain ($objet, $conn)
				{
					$id_terr = $objet->get_id_terrain();

					print $SQL = "UPDATE terrain SET etat_terrain = '1'
					WHERE id_terrain = '$id_terr'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression terrain ');
				}


	/* ---------------------- */
	/* FIN class Terrain */
	/* ---------------------- */
}
?>
