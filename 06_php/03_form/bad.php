<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>PHP form</title>
<style>
</style>
</head>
<body>
<h1><?php echo date("Y-m-d h:i:sa")?></h1>
<form action="" method="post">
<label for="nom">Nom : </label><input type="text" name="nom" id="nom" />
<label for="prenom">Prénom : </label><input type="text" name="prenom" id="prenom" />
<input type="submit" value="Valider">
<?php
	if($_POST){
		echo "<p>" . $_POST["nom"] . "<br>" . $_POST["prenom"] . "</p>";
	}
?>
</form>
</body>
<html>
