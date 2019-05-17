<?php
	session_start();
?>

<!DOCTYPE html>

<html>

	<head>
		<title>Sondage</title>
		<meta name="content-language" content="fr" />
		<meta charset= "utf-8">
		<link rel="stylesheet" href="basique.css" />
		<link rel="stylesheet" href="menu projet.css" />
		<link rel="stylesheet" href="style2.css" />
	</head>
	


	<body>

		<header>
			<h1>Sondage</h1>
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
		
		<br/>
		


		<div id="bloc">

			<div class="text">

				<p>Nous n'avons malheureusement pas eu le temps de vous faire découvrir d'autres destinations. <br/> <br/>
				Vous pourrez ici : <br/> <br/>
				-Nous donner votre avis <br/>
				-Choisir la destination que vous auriez aimé voir. <br/>
				-Répondre au quiz à la fin de cette page :) <br/> <br/>
				N'hésitez pas, nous vous remercions de votre participation ! </p>
				
			</div>

		</div>
		
		<br/>

		<form action='resultats.php' method="post">

		<fieldset class="first">

			<legend> <b> Le jeu : </b> </legend>

			
			Avez-vous apprécié notre jeu ? 
				<input type="radio" name="jeu" value="oui" />oui
				
				<input type="radio" name="jeu" value="non" />non
				<br/>
				<br/>
				

			Les personnages vous-ont ils plu ? 
			    <input type="radio" name="personnage" value="oui"/>oui
				
				<input type="radio" name="personnage" value="non"/>non
			    <br/>
				<br/>
				
			
			Ce jeu vous a-t-il fait voyager ?
				<input type="radio" name="voyage" value="oui"/>oui
			
				<input type="radio" name="voyage" value="non"/>non
				<br/>
				
	    </fieldset> 

	    <br/>

		<fieldset class="first">

			<legend> <b> Choix de votre destination préférée : </b> </legend>

				<img src="maldives.jpg" width="30%"> <br/>
			    <label >Les Maldives</label>
			    <input type="radio" name="destination" value="Maldives" />
				
			    <br/><br/>

				<img src="temple.jpg" width="30%"> <br/>
			    <label >Le Japon</label>
				<input type="radio" name="destination" value="Japon" />

			    <br/><br/>

			    <img src="rio.jpg" width="30%"> <br/>
			    <label >Le Brésil</label>
				<input type="radio" name="destination" value="Brésil" />
				
			    <br/><br/>

			    <img src="cuba.jpg" width="30%"> <br/>
			    <label >La Havane</label>
				<input type="radio" name="destination" value="Cuba" />
				
			    <br/><br/>

			    <img src="canada.jpg" width="30%"> <br/>
			    <label >Le Canada</label>
				<input type="radio" name="destination" value="Canada" />
				
			    <br/>			
			
	    </fieldset>

	    <br/>

	    <fieldset class="first">

			<legend> <b> Quiz : </b> </legend>
			
			<ol>
			<li>Quel est le nom de la première destination ?
			
			<input type="radio" name="premiere" value="islande"/> Islande
			
			<input type="radio" name="premiere" value="irlande"/>Irlande
			</li>
			<br/>	
			<li>Comment s'appelle l'ami des personnages ?

			<input type="text" name="gabriel"/>
			</li>
			<br/>
			
			<li>Quel était le dernier pays à trouver ?
			
			<input type="text" name="final"/>
			</li>
			</ol>
			
			
		</fieldset>
		
       <br/>
	   
		<div class="formulaire" >
		<input type="submit" value="Continuer" />
		<input type="reset" value="Annuler" />
		</div>
			
			
	</form>
	
	<br/>
	
	<hr/>
	    
	<p class="cop"><i>© Projet ISN 2019 - Mélanie et Emilie</i></p>
	
	
	</body>

</html>