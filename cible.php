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
		<h2>Espace personnel</h2>
		
		<p>Bonjour <?php echo ''.$_POST['pseudo'].' !'; ?></p>
		<p>Ce n'est pas le bon compte ? <a href="connexion.php">Clique ici</a> pour revenir à la page de connexion </p>

		<footer id="foot01"></footer>
	</div>

<script src="script.js"></script>

</body>
</html>
