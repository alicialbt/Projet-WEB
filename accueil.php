<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>TC Advisor</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
    <script src="script.js"></script>
    <script src="jquery.js"></script>

		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		
	</head>

  <div class="connexion">
    <div class="container">
      <header>
        <?php include("champ_connexion.php") ?>
      </header>
    </div>
  </div>

  <body class="homepage">
	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="accueil.php">Accueil</a></li>
						<li><a href="mon_compte.php">Mon Compte</a></li>
						<li><a href="pays.php">Pays</a></li>
						<li><a href="membres.php">Membres</a></li>
						<li><a href="about.php">About</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
          <img src="images/TCATW.png" height="300" width="300" style="margin:-120px 0 0 0">
					<h1><a href="#">TC Advisor</a></h1>
					<span class="tag">By des TC du swague</span>
				</div>
			</div>
		</div>

	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<header>
					<h2>Bienvenue sur TC Advisor ! </h2>
				</header>
        <p>Sur ce site, vous pouvez :</p>
        <?php
          if(isset($_SESSION['login'])){
            echo '<a href="site_espace_personnel.php"><p>Accéder à votre espace personnel</p></a>';}
          else{
            echo '<a href="site_connexion.php"><p>Vous connecter pour avoir accès à votre espace personnel!</p></a>';}
         ?>
                                
        <a href="membres.php"><p>Voir la liste des personnes parties</p></a>
        <a href="pays.php"><p>Rechercher un pays</p></a>
        </hr>
			</div>
		</div>

	<!-- Main 
		<div id="main">
			<div id="content" class="container">

				<div class="row">
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic01.jpg" alt=""></a>
						<header>
							<h2>Mauris vulputate dolor</h2>
						</header>
						<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</p>
					</section>				
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic02.jpg" alt=""></a>
						<header>
							<h2>Mauris vulputate dolor</h2>
						</header>
						<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</p>
					</section>				
				</div>

				<div class="row">
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic03.jpg" alt=""></a>
						<header>
							<h2>Mauris vulputate dolor</h2>
						</header>
						<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</p>
					</section>				
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic04.jpg" alt=""></a>
						<header>
							<h2>Mauris vulputate dolor</h2>
						</header>
						<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</p>
					</section>				
				</div>
			
			</div>
		</div>
    -->


	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Un TC à l'étranger est un TC satisfait.</br>Un TC à l'étranger qui n'a pas eu besoin de faire son contrat d'étude est un TC encore plus satisfait.&rdquo;</blockquote>			
        </section>
			</div>
		</div>

	<!-- Footer
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
    -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
			  <span id="copyright symbol">&copy copyright 2016 TC - Tous droits réservés</span>
			</div>
		</div>

	</body>
</html>
