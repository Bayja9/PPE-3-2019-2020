<?php
			include ('bdd.inc.php');
			$id_robe =  $_GET['id_robe'];
			$SQL = "SELECT * FROM robe WHERE id_robe = '$id_robe'";
			$res = $conn -> query($SQL);
			$ligne = $res ->fetch();
?>
		<form method="post" action ="operation_robe.php">
		<fieldset>
		    <legend>Modifier Robe</legend>
			<label>id_robe :</label>
            <input type="text" value="<?php echo $id_robe = $_GET['id_robe']?>" name="id_robe"><br><br>
            <label>Couleur :</label>
            <input type="text" value="<?php echo $ligne['couleur']?>" name="couleur"><br><br>
			<input type="reset" name ="effacer" value="EFFACER">
            <input type="submit" name="modifiero" value="MODIFIER">

		</fieldset>
		</form>
