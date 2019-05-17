<?php
	session_start();
?>

<!DOCTYPE html>

<html>

	<head>
		<title>Résultats</title>
		<meta name="content-language" content="fr" />
		<meta charset= "utf-8">
		<link rel="stylesheet" href="basique.css" />
		<link rel="stylesheet" href="menu projet.css" />
		<link rel="stylesheet" href="style2.css" />
	</head>
	


	<body>

		<header>
			<h1>Résultats</h1>
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

				<?php
				$varpays = $_POST['destination'];
				$varjeu = $_POST['jeu'];
				$varperso = $_POST['personnage'];
				$varv = $_POST['voyage'];

				$link = mysql_connect("localhost","root","");
				if (!$link) die('Connexion impossible : ' . mysql_error());

				$db_selected = mysql_select_db('test', $link);
				if (!$db_selected) die ('Impossible de sélectionner la base de données : ' . mysql_error());


				$query = "insert into `questionnaire` (`nom`, `aimer`, `personnage`, `voyager`, `choix`) values ('".$_SESSION['nom']."','".$varjeu."','".$varperso."','".$varv."','".$varpays."')";
				mysql_query($query);

				$query = "select choix, count(*) as nb from `questionnaire` group by `choix`";
				$result = mysql_query($query);
				while ($ligne = mysql_fetch_array($result)) 
				{
				echo $ligne['choix']." ".$ligne['nb']."<br/>";
				}
				?>

				<p>Votre vote a bien été pris en compte merci de votre visite sur notre site.<br/><br/>

				<?php
				$varnom = $_POST['destination'];
				
				if ($varnom=='Maldives')
						{echo '<img src="maldives.jpg" width="50%">  ';
						}
				if ($varnom=='Japon')
						{echo '<img src="temple.jpg" width="50%">  ';
						}
				if ($varnom=='Brésil')
						{echo '<img src="rio.jpg" width="50%">  ';
						}
				if ($varnom=='Mexique')
						{echo '<img src="cuba.jpg" width="50%">  ';
						}	
				if ($varnom=='Canada')
						{echo '<img src="canada.jpg" width="50%">  ';
						}
				?>

				<br/><br/>

				<?php
				$varjeu = $_POST['jeu'];
				
				if ($varjeu=='oui')
						{echo 'Nous sommes heureuses que vous ayez appprécié ce jeu, en espérant vous revoir pour de nouvelles aventures.';
						}
				else
						{echo 'Nous sommes désolées que notre jeu ne vous ait pas plu, <br/> nous ferons de notre mieux pour que celui-ci vous plaise par la suite.';
						}
				?>

				<br/>

				<?php
				$varperso = $_POST['personnage'];
				
				if ($varperso=='oui')
						{echo "Nous remercions notre amie Aurély qui a réalisé ces différents personnages, <br/> elle sera ravie de savoir qu'ils vous ont plu.";
						}
				else
						{echo 'Ces personnages ont été dessiné par notre amie Aurély et nous la remercions pour son aide. <br/> Nous essaierons de varier les styles la prochaine fois afin de vous satisfaire.';
						}
				?>

				<br/>

				<?php
				$varv = $_POST['voyage'];
				
				if ($varv=='oui')
						{echo "Nous avons choisi ces destinations en fonction des voyages que nous aurions aimé faire <br/> et nous sommes heureuses que vous ayez pu voyager le temps d'une partie. ";
						}
				else
						{echo 'Ces destinations ont été choisi selon nos préférences, <br/> ne vous inquiétez pas nous vous proposerons différentes destinations dans nos futures aventures.';
						}
				?>

				<br/>

				</p>
			</div>
		</div>

		<br/><br/>

		<div id="bloc">
			<div class="text">

				<p>
				<u>Résultats du quiz : </u><br/>

				<ol>
					<li>
					<?php
					$var1 = $_POST['premiere'];
						
					if ($var1=='islande')
							{echo 'Bravo, on peut voir que vous avez fait attention à votre parcours, continuez ainsi ! ';
							}
					else	
							{echo 'Désolé, votre réponse est incorrecte, nous vous invitons à retenter votre chance.  ';
							}
					?>		
					</li>
				
				<br/>
					
					<li>
				<?php
				$var2 = $_POST['gabriel'];
					
				if ($var2=='Gabriel')
						{echo 'Vous avez la bonne réponse, félicitations ! ';
						}
				else	
						{echo 'Le nom du personnage est incorect, vous pouvez rejouer afin de trouver la bonne réponse.  ';
						}
				?>
					</li>

				<br/>

					<li>
					<?php
					$var3 = $_POST['final'];
						
					if ($var3=='Inde')
							{echo 'Nous espérons que cette dernière destination vous a plu et que vous vous souviendrez de ce voyage. ';
							}
					else	
							{echo 'Votre réponse est fausse, vous pouvez réessayer.  ';
							}
					?>
					</li>
				</ol>

				<br/>

				Cela vous fait un total de 

				<?php
					
					if ($var1=='islande') 
						{
							$nombre = 1;
						}

					else
						{
							$nombre = 0;
						}
				?>

				<?php
					
					if ($var2=='Gabriel') 
						{
							$nombre = $nombre + 1;
						}

					else
						{
							$nombre = $nombre;
						}
				?>

				<?php
					
					if ($var3=='Inde') 
						{
							$nombre = $nombre + 1;
						}

					else
						{
							$nombre = $nombre;
						}
				?>

				<?php
				echo "$nombre bonnes réponses. ";
				if ($nombre==1) 
				{
					echo "Nous sommes sûres que vous pouvez mieux faire !";
				}
				elseif ($nombre==2) 
				{
					echo "Pas mal !";
				}
				elseif ($nombre==3) 
				{
					echo "C'est un sans fautes, quelle mémoire !";
				}
				else
				{
					echo "Aie comment est-ce possible ?<br/><img src='angry.png' width='15%'/>";
				}
				?>


				</p>
			</div>

		</div>
		
		<br/>

	
	<br/>
	
	<hr/>
	    
	<p class="cop"><i>© Projet ISN 2019 - Mélanie et Emilie</i></p>
	
	
	</body>

</html>