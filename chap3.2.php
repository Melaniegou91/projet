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
		<h1>Chapitre 3</h1>
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
					{echo '<img src="fille.png" width="55%"> ';
					}
			else
					{echo '<img src="index.png" width="47%"> ';
					}
			?>
		</div>
		
		<div id="milieu">
			<img src="vietnam.jpg" width="100%"/>
				<div class="dialogue">
				
					<p>

					<div class="name3">	

					Gabriel :

					</div>

					"Haha je sais que tu attends ton petit indice quotidien <br/>
					<?php 
					if ($_SESSION['civ']=='fille')
						{echo 'ma petite ';}
					else
						{echo "mon petit ";}

					echo $_SESSION['nom'];
					?>.
					Il se peut que tu aies faim tente une spécialité en 3 lettres."

					</p>
				
				</div>
			
		</div>
		
		<div id="droite">

		</div>
		
	</div>
	
		<br/>
		
		<div class="choix">
			<fieldset>
				<legend>Votre réponse :</legend>
		<form action="transition2.php" method="post">

			<i>Trouve le bon plat et n'oublie pas la majuscule !</i> <br/><br/>
			<input type="text" name="food"/> <input type="submit" value="Valider" />
			
		</form>
			</fieldset>
		</div>

		<br/> <br/>

	</body>

</html>