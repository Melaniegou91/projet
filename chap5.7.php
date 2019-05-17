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
		<h1>Chapitre 5</h1>
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
					{echo '<img src="fille.png" width="59%"> ';
					}
			else
					{echo '<img src="index.png" width="48%"> ';
					}
			?>
		</div>
		
		<div id="milieu">
			<img src="inde.jpg" width="100%"/>
				<div class="dialogue">
				
					<p>

					<div class="name1">	

					<?php
					echo $_SESSION['nom'];
					?> :

					</div>

					Mais je viens à peine d'arriver, tant pis il a intérêt de me faire visiter. <br/>
					Il est temps de déchiffrer son mystérieux code.
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
		<form action="transition4.php" method="post">

			<i>Rentre les bonnes coordonnées.</i> <br/><br/>
			<input type="int" name="nb1"/> <label>°</label> 
			<input type="int" name="nb2"/> <label>'</label>
			<input type="int" name="nb3"/> <label>" N</label>

			<br/><br/>

			<input type="int" name="nb4"> <label>°</label>
			<input type="int" name="nb5"> <label>'</label>
			<input type="int" name="nb6"> <label>" E</label>

			<br/><br/>

			<input type="submit" value="Valider" />

			<br/><br/>

			Indices à révéler : 
			<div class="spoiler"> 
				27, 27-17, 17+10, <br/>
				2+5 et 2*4, 02, 4*8

			</div>
			
		</form>
			</fieldset>
		</div>

		<br/> <br/>

	</body>

</html>