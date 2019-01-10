<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="styles/style.css">
	    <title>Page de connexion</title>
	</head>

	<body>
		<h2>Connectez-vous : </h2>

		<form action='analyseC.php' method="post">
			Login : <input type="text" name="login" placeholder="Mickey"><br>
			Mot de passe : <input type="password" name="mdp" placeholder="******"><br><br>
			<input type="submit" value="Connexion">
		</form>
		<br>
		<button onclick="window.location.href = 'inscription.php'">Inscription</button>
	</body>
</html>