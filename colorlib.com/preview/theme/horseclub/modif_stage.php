<?php
			include ('bdd.inc.php');
			$ids =  $_GET['id_stage'];
			$SQL = "SELECT * FROM stage WHERE id_stage = '$ids'";
			$res = $conn -> query($SQL);
			$ligne = $res ->fetch();
?>
		<form method="post" action ="operation_stage.php">
		<fieldset>
		    <legend>Modifier Stage</legend>
			<label>idclasse :</label>
            <input type="text" value="<?php echo $id_stage = $_GET['id_stage']?>" name="id_stage"><br><br>
            <label>Nom du Stage :</label>
            <input type="text" value="<?php echo $ligne['nom_stage']?>" name="nom_stage"><br><br>
            <label>Date de Debut :</label>
            <input type="date" value="<?php echo $ligne['date_debut_stage']?>" name="date_debut_stage"><br><br>
            <label>Date de Fin :</label>
            <input type="date" value="<?php echo $ligne['date_fin_stage']?>" name="date_fin_stage"><br><br>
            <label>Description Stage :</label>
            <input type="text" value="<?php echo $ligne['description_stage']?>" name="description_stage"><br><br>
            <label>Localisation Stage :</label>
            <input type="text" value="<?php echo $ligne['localisation_stage']?>" name="localisation_stage"><br><br>
			        <input type="reset" name ="effacer" value="EFFACER">
            <input type="submit" name="modifiers" value="MODIFIER">

		</fieldset>
		</form>
D
