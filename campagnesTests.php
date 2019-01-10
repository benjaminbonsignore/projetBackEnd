<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="styles/style.css">
	    <title>Campagnes</title>
	</head>

	<body>
		<h2>Campagnes de ventes : </h2>

		<h3>Campagnes en cours : </h3>
		<?php

		$host = 'localhost';
    	$dbname = 'projetBackEnd';
    	$username = 'root';
    	$password = 'Dta2018!';

		$bdd = new PDO('mysql:host=localhost;dbname=projetBackEnd',$username,$password); 

		$enCours = $bdd->query("SELECT Nom FROM Campagnes WHERE DateFin>'".date('Ymd')."'");
		$finies = $bdd->query("SELECT Nom FROM Campagnes WHERE DateFin<'".date('Ymd')."'");

		$enCours->setFetchMode(PDO::FETCH_BOTH);
		$finies->setFetchMode(PDO::FETCH_BOTH);

		while($campagneEnCours = $enCours->fetch()){
			echo $campagneEnCours[0];
			echo "<br><br>";
		}

	

		?>

		<h3>Campagnes terminées : </h3>

		<?php

			while($campagneFinies = $finies->fetch()){
			echo $campagneFinies[0];
			echo "<br><br>";
		}

		?>
	</body>
</html>