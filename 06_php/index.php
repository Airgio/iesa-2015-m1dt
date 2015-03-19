<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>PHP</title>
<style>
</style>
</head>
<body>
	<?php
		/*$a = 1;

		function test() {
			global $a;
			// Les variables globales n'ont pas de portée dans les fonctions sans faire "global $var"
			echo $a;
		}
		test();*/

		$a = "bonjour";
		$$a = "monde";

		/*echo $a . "<br />";
		echo $$a . "<br/>";*/	
		echo $bonjour . "<br/>";

		// Définir une variable contanste
		// Le nom d'une constante doit être en majuscule
		define("NOM", "Giordano");
		// definir une constante autrement
		const PRENOM = "Romain";

		echo NOM;
		echo PRENOM;

		/* 9 types 
		- type scalaires
			boolean, integer, float, string
		- Types composés
			array, object
		- Types speciaux
			resource, NULL
		*/
	?>
</body>
<html>
