<!DOCTYPE html>

<html>
<head>
	<title>Mon Compte</title>
	<meta charset="utf-8">
	<link href="site.css" rel="stylesheet">
</head>

<body>
	<?php include("entete.php"); ?>
	<nav id="nav01"></nav>

		<div id="main">
			<h2>Connexion</h2>
			
			<form method="post" action="cible.php">
				<p>Pseudo :     
					<input type="text" name="pseudo"/>
				</p>
				<p>Password : 
					<input type="password" name="mot_de_passe"/>
					<input type="submit" value="Valider">
				</p>
			</form>

			<footer id="foot01"></footer>
		</div>

	<script src="script.js"></script>

</body>
</html>
