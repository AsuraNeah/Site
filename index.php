<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		
		header("Location: login.php");
		exit();
	}


?>
<!DOCTYPE html>
<html>
	<head>

	<title>KafirCorp - Espace membre</title>
    <link rel="shortcut icon" href="Image/DogeIco.ico">
	<link rel="stylesheet" href="style.css" />	
	</head>

<body>

		<!-- Insertion Menu/Submenu-->
	<div id="wrap">
	<ul class="navbar">
		
			<li><a href="index.php">Acceuil</a></li>

				<!-- Initialisation Menu/SMenu Stock-->	
			<li><a href="stock.php">Stock</a>
				<ul>
					<li><a href="infstock.php">Information Stock</a></li>
        			<li><a href="addstock.php">Création produit</a></li>
					<li><a href="udpstock.php">Mise à jour Stock</a></li>
        			
			
				</ul>			
			</li>

				<!-- Initialisation Menu/SMenu Client-->	
				<li><a href="client.php">Client</a>
				<ul>
					<li><a href="infclient.php">Fiche Client</a></li>
					<li><a href="addclient.php">Création Client</a></li>
					<li><a href="udpclient.php">Mise à jour Client</a></li>
        			
			
				</ul>			
			</li>

				<!-- Initialisation Menu/SMenu Dev-->		
				<li><a href="dev.php">Informations DEV</a>
				<ul>
					<li><a href="form.php">Création Formulaire</a></li>
					<li><a href="addmdev.php">Création Menu Déroulant</a></li>
        			<li><a href="geom.php">Géométrie</a></li>
        			
			
					
				</ul>
            </li>
	</ul>
	</div>

	<!-- Initialisation Texte Bienvenu -->
	<div class="sucess">
		<h2>Bienvenue <?php echo $_SESSION['username']; ?>!</h2>
		<p>Ceci est votre tableau de bord.</p>
		<a href="logout.php">Déconnexion</a>
		</div>
		


	</body>
</html>

<!--@Phong Al Kafir / @AsuraNeah -->
