<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>EXO tableaux</title>
	</head>
	<body>
		<?php
			$mois = array('janvier', 'février', 'mars', 'avril','mai', 'juin', 'juillet', "aout", "septembre", "octobre", "novembre", "decembre");

				/*Exo 1 ci dessus*/

			echo $mois[2];
			echo "<br/>";
			
				/*Exo 2 ci dessus*/
			
			echo $mois[5];
			echo "<br/>";

				/*Exo 3 ci dessus*/
			$mois[7] = "août";
			echo $mois[7];
			echo "<br/>";

				/*Exo 4 ci dessus*/

			$departements = array ('02' => "Aisne" , '59' => "Nord" , '60' => "Oise" , '62' => "Pas-de-Calais" , '80' => "Somme");
			
				/*Exo 5 ci dessus */

			echo $departements [59];
			echo "<br/>";	

				/*Exo 6 ci dessus */

			$departements  [51] = "Marne";
			echo $departements [51];
			echo "<br/>";
			
				/*Exo 7 ci dessus*/

			foreach ($mois as $moisEntiers) {
				echo $moisEntiers . "<br/>";
			}
			echo "<br/>";
				
				/*Exo 8 ci dessus*/

			foreach ($departements as $num => $dep) {
				echo $num . " " . $dep . "<br/>";
			}
			echo "<br/>";

				/*Exo 9 ci dessus*/

			foreach ($departements as $num => $dep) {
				echo "Le departement" . " " . $dep . ", a le numéro " . $num . "<br/>";
			}
			 	/*Exo 10 ci dessus*/

		?>
	</body>
</html>