<?php

session_start();

if(isset($_POST['login']) AND isset($_POST['mdp']))
{
    $host = 'localhost';
    $dbname = 'projetBackEnd';
    $username = 'root';
    $password = 'Dta2018!';

	$bdd = new PDO('mysql:host=localhost;dbname=projetBackEnd',$username,$password); 

	$login = $_POST['login'];
	$mdp = $_POST['mdp'];

	$l = $bdd->query("SELECT Login FROM Clients WHERE Login='".$login."' AND MdP='".$mdp."';");
	$m = $bdd->query("SELECT MdP FROM Clients WHERE Login='".$login."' AND MdP='".$mdp."';");

	$l->setFetchMode(PDO::FETCH_BOTH);
	$m->setFetchMode(PDO::FETCH_BOTH);


	if($l->fetchColumn() && $m->fetchColumn()) header('Location: campagnes.php');
	else 
	{
		$err = "Oui";
		header('Location: index.php');
	}
}
