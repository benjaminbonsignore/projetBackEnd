<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Page d'inscription</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="style_co.css">
</head>

<body>

	<div class="container-fluid">

		<div class="accueil">
			<h2>Inscrivez vous !</h2>
		</div>

		<div class="logo">
			<img src="logo.png">

		</div>




		<div class="formulaire">
				<form action="analyseI.php" method="post">
				Login : <br><input type="text" name="login"><br>
				Mot de passe : <br><input type="password" name="mdp"><br>
				Prénom : <br><input type="text" name="prenom"><br>
				Nom : <br><input type="text" name="nom"><br>
				Ville : <br><input type="text" name="ville"><br>
				Adresse : <br><input type="text" name="adresse"><br>
				Code postal : <br><input type="text" name="codePostal"><br>
				Téléphone fixe : <br><input type="text" name="fixe"><br>
				Téléphone mobile : <br><input type="text" name="mobile"><br>
				Mail : <br><input type="text" name="mail"><br>
				Pays : <br><input type="text" name="pays"><br>
				Etat : <br><input type="text" name="etat"><br><br>
				<input type="submit" value="Envoyer">
			</form>
		</div>
	</div>



</body>
</html>
