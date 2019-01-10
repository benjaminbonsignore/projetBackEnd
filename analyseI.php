<?php

session_start();

if(isset($_POST['login']) AND isset($_POST['mdp'])AND isset($_POST['prenom'])AND isset($_POST['nom'])AND isset($_POST['ville'])AND isset($_POST['adresse'])AND isset($_POST['codePostal'])AND isset($_POST['fixe'])AND isset($_POST['mobile'])AND isset($_POST['mail'])AND isset($_POST['pays'])AND isset($_POST['etat']))
{
	$host = 'localhost';
	$dbname = 'projetBackEnd';
	$username = 'root';
	$password = 'Dta2018!';

	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$ville = $_POST['ville'];
	$adresse = $_POST['adresse'];
	$codeP = $_POST['codePostal'];
	$telF = $_POST['fixe'];
	$telM = $_POST['mobile'];
	$mail = $_POST['mail'];
	$pays = $_POST['pays'];
	$etat = $_POST['etat'];


	$conn = mysqli_connect($host,$username,$password,$dbname);

	if(!$conn){
		die('Could not connect: '.mysqli_error());
	}
	echo "Connected successfully";



	$query = "INSERT INTO Clients (Login,MdP,Nom,Prenom,Ville,Adresse,CodePostal,Fixe,Portable,Mail,Pays,Etat,DateInscription) VALUES('".$login."','".$mdp."','".$nom."','".$prenom."','".$adresse."','".$ville."','".$codeP."','".$telF."','".$telM."','".$mail."','".$pays."','".$etat."','".date('d/m/Y')."');";


	if (mysqli_query($conn, $query)) 
	{
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "" . mysqli_error($conn);
    }


	mysqli_close($conn);

	header('Location: index.php');
}
