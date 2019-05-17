<?php 
	session_start();
?>

<!DOCTYPE html>

<html>

	<head>
		<title>Jeu</title>
		<meta name="content-language" content="fr" />
		<meta charset= "utf-8">
		<link rel="stylesheet" href="basique.css" />
		<link rel="stylesheet" href="menu projet.css" />
		<link rel="stylesheet" href="style2.css" />
	</head>


	<body>

	<header>
		<h1>Chapitre 2</h1>
		<nav>
			<ul class="nav">
				<li class="dropdown"><a href="accueil.html"><b>Accueil</b></a></li>
				<li class="dropdown"><a href="presentation.html"><b>Jouer</b></a></li>
				<li class="dropdown"><a href="hist.html"><b>Histoire</b></a>
					<ul class="submenu">
						<li><a href="personnage.html">Présentation personnages</a></li>
						<li><a href="resume.html">Résumés</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="bonus.html"><b>Bonus</b></a>
					<ul class="submenu">
						<li><a href="galerie.html">Galerie photos</a></li>
						<li><a href="sondage.php">Sondage + quiz</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	
		<br/> <br/>
		
	<div id="conteneur">
	
		<div id="gauche"> 			
			<?php
			
			if ($_SESSION['civ']=='fille')
					{echo '<img src="fille2.png" width="62%"> ';
					}
			else
					{echo '<img src="index.png" width="47%"> ';
					}
			?>
		</div>
		
		<div id="milieu">
			<img src="aurore.jpg" width="100%"/>
				<div class="dialogue">
				
					<p>

					<div class="name1">	

					<?php
					echo $_SESSION['nom'];
					?> :

					</div>

					Argh, il fait déjà nuit... Mais qu'est ce que c'est beau, <br/>
					c'est la première fois que je vois des aurores boréales.
					</p>
				
				</div>
			
		</div>
		
		<div id="droite">

		</div>
		
	</div>
	
		<br/>
		
		<div class="rep">
		<a  href="chap2.6.php"> Continuer </a>
		</div>

		<br/> <br/>

	</body>

</html>