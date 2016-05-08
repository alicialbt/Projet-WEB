
Skip to content
This repository

    Pull requests
    Issues
    Gist

    @jcassou

4
0

    0

alicialbt/Projet-WEB
Code
Issues 0
Pull requests 0
Wiki
Pulse
Graphs
Projet-WEB/new.php
db165da 15 seconds ago
@jcassou jcassou Create new.php
45 lines (31 sloc) 998 Bytes
<!DOCTYPE html>

<html>
<head>
	<title>TC Advisor - Students</title>
	<meta charset="utf-8">
	<link href="site.css" rel="stylesheet">
</head>

<body>
	<?php include("entete.php"); ?>
	<nav id="nav01"></nav>
	
	<div id="main">
		<h2>Banque de Données</h2>
		
		<form method="post" action="cible.php">
			<p>Etudiants partis</p>
    
    <?php 
      $bdd = new PDO('mysql:host=localhost; dbname=Membres;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $reponse = $bdd->query('SELECT * FROM Infos_membre');
      while ($donnees = $reponse->fetch()) {
    ?>
      <p> <strong>Nom</strong> : <?php echo $donnees['Nom']; ?> <br />
          <strong>Prénom</strong> : <?php echo $donnees['Prénom']; ?> <br />
          <strong>Promotion</strong> : <?php echo $donnees['Promotion']; ?> <br />
      </p>

    <?php } 
      $reponse->closeCursor();
    ?>
    

		<footer id="foot01"></footer>
	</div>

	<script src="script.js"></script>

</body>
</html>


	

    Status API Training Shop Blog About 

    © 2016 GitHub, Inc. Terms Privacy Security Contact Help 

