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
		<h1>Premier chapitre</h1>
		<nav>
			<ul class="nav">
				<li class="dropdown"><a href="accueil.html"><b>Accueil</b></a>
				<li class="dropdown"><a href="presentation.html"><b>Jouer</b></a>
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
					{echo '<img src="fille.png" width="60%"> ';
					}
			else
					{echo '<img src="index.png" width="51%"> ';
					}
			?>
		</div>
		
		<div id="milieu">
			<img src="lettre.jpg" width="100%"/>
				<div class="dialogue">
				
					<p>

					<div class="name1">	

					<?php
					echo $_SESSION['nom'];
					?> :

					</div>

					Wow je dois vraiment me rendre en <b>Islande</b> ?? <br/> Oh non le vol est pour 8h50, je dois me dépêcher pas le choix. </p>
				
				</div>
			
		</div>
		
		<div id="droite">
		
		</div>
		
	</div>
	
		<br/>
		
		<div class="rep">
		<a  href="chapitre2.php"> Aller à l'aéroport </a>
		</div>


	<br/> <br/>

	</body>

</html>