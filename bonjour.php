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
			<h2>Espace Personnel</h2>

			<?php 
				if(isset($_GET['prenom']) AND isset($_GET['nom'])) {
					echo 'Bonjour ' .$_GET['prenom'].' '.$_GET['nom'].' !';
				}
				else {
					echo 'Sale noob il faut renseigner un nom et un prénom !';
				}
			?>
	
			<footer id="foot01"></footer>
		</div>

	<script src="script.js"></script>

</body>
</html>
