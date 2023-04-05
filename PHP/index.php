<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 5;
		$y = 10.5;
		$z = $x + $y;
		echo "La somme est: ".$z;
		
		echo "<br>";
		
		$txt = "Bonjour";
		$prenom = "Ruslan";
		$salution = $txt." ".$prenom." !";
		echo $salution;
		echo "<br>";
		$x = 5 /* + 15 */ + 5;
		echo $x;
		echo "<br>";
		function msg(){
			echo "Bonjour tout le mond";
		}
		msg();
		function msgPrm($nom = "tout le mond"){
			echo "Bonjour $nom";
		}
		echo"<br>";
		msgPrm("Ruslan");
		echo"<br>";
		msgPrm();
		echo"<br>";
		echo"<br>";
		function VolumCone($rayon, $hauteur){
			$volum = pow($rayon, 2) * pi() * $hauteur * (1/3);
			return $volum;
		}
		echo 'Le volume : '. VolumCone(3, 1);
		echo"<br>";
		$tableau = [1, 2, 3, 4, 5];
		echo $tableau[2];
		echo"<br>";

		$voitures = array(
			array("Volvo", 22),
			array("BMW", 15),
			array("Saab", 5),
			array("Saab", 17),
		);
		echo $voitures[0][0] . " " .$voitures[0][1];
		echo"<br>";
		echo $voitures[1][0] . " " .$voitures[1][1];
		echo"<br>";

		$etudiants = array(
			1230 => [
					'nom' => 'ALLON',
					'prenom' => 'LEVY',
					'specialite' => 'TIN', 
					'moyenne' => 13, 
					'mention' => 'Bien'
					],
			1231 => [
					'nom' => 'BACARD',
					'prenom' => 'HUGO', 
					'specialite' => 'CDI', 
					'moyenne' => 12, 
					'mention' => 'A Bien'
			],
			1232 => [
					'nom' => 'BAKER',
					'prenom' => 'MATTHEW', 
					'specialite' => 'IPS', 
					'moyenne' => 14, 
					'mention' => 'Bien'
					],
			1233 => [
					'nom' => 'BALWE',
					'prenom' => 'CHETAN', 
					'specialite' => 'B', 
					'moyenne' => 18, 
					'mention' => 'Excellent'
					],
			1234 => [
					'nom' => 'BELAIR',
					'prenom' => 'LUC', 
					'specialite' => 'IG', 
					'moyenne' => 13, 
					'mention' => ' A bien'
					]
			/* Les 3 lignes qui restent */
		);
		
		echo '<pre>';
		print_r($etudiants);
		echo '</pre>';
		echo '<hr>';
		var_dump($etudiants[1231]);
		echo $etudiants[1231]['nom']; // BACARD

		echo"<br>";

		echo "Tant que (condition) fait … :<br>";
		$x = 1;
		while($x <= 5){
		echo "Le numéro est : $x <br>";
		$x++;
}
    ?>
</body>
</html>