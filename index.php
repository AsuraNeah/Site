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
	<!--	<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre tableau de bord.</p>
		<a href="logout.php">Déconnexion</a>
		</div>
-->	
		<nav>
			<ul>
				<li class="menu-acceuil"><a href="index.php">Acceuil</a></li>

				<!-- Initialisation Menu/SMenu Stock-->	
				<li class="menu-stock">><a href="stock.php">Stock</a></li>
					<ul class="submenu">
                    <li><a href="upstock.php">Mise à jour Stock</li>
                    <li><a href="ifstock.php">Information Stock</li>
                    <li><a href="addstock.php">Création produit</li>
                </ul>

				<!-- Initialisation Menu/SMenu Client-->	
				<li class="menu-client">><a href="client.php">Client</a></li>
					<ul class="submenu">
                    <li>Mise à jour Client</li>
                    <li>Fiche Client</li>
                    <li>Création Client</li>
                </ul>
            </li>

				<!-- Initialisation Menu/SMenu Dev-->		
				<li class="menu-dev">><a href="dev.php">Informations DEV</a></li>
					<ul class="submenu">
                    <li<a href="dev_menu.php">>Création Menu Déroulant</li>
                    <li>Création Cathégorie</li>
                    <li>Géométrie</li>
				</ul>
            </li>

		</nav>
	</body>
</html>

<!--@Phong Al Kafir / @AsuraNeah -->
