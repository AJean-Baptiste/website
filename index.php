<!DOCTYPE html>
<html lang="fr">
  <head>
	<title>étudiant en développement web</title>
	
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="scripts/animation.js"></script>
	<?php include 'scripts/contact.php';?>
	
	<div class="top">
		<div class="bar" id="Navbar">
			<a href="#home" class="button"><i class="fa fa-home"></i>ACCUEIL</a>
			<a href="#about" class="button"><i class="fa fa-info"></i>A PROPOS</a>
			<a href="#github" class="button"><i class="fa fa-github"></i>GITHUB</a>
			<a href="#contact" class="button"><i class="fa fa-envelope"></i>CONTACT</a>
			<a href="index_en.php" class="language">Switch to english</a>
		</div>
	</div>
	
  </head>
  <body>
	<div class="topPicture" id="home">
		<div>
			<h1>Jean-Baptiste Auffret</h1>
			<h2>étudiant en développement web</h2>
			<h3>astronome amateur</h3>
		</div>
	</div>
	<div class="about" id="about">
		<h2>A PROPOS DE MOI</h2>
		<div class="bio">
			<img class="animated-left" src="images/profil.png"></img>
			<div>
				<p>Jeune étudiant développeur passionné par les sciences, j'ai récemment décidé de me réorienter vers le développement web en postulant à l'école MyDigitalSchool en 3ème année.</p>
				<br>
				<p>Je suis passionné par la programmation depuis mes 14 ans, ayant développé mon premier site web, des mods de jeux vidéos et hébergé un serveur accueillant une dizaine de joueurs par jour. Lorsque j'ai entrepris mes études supérieures en physique, j'ai décidé de mettre la programmation de côté et de me consacrer à la science. Mes différentes formations en DUT et en licence m'ont cependant aidé à approfondir mes connaissances en programmation et m'ont finalement redonné cette passion en 2021. En juin 2022 j'ai finalement pris la décision de me réorienter en programmation et j'ai décidé de postuler à MyDigitalSchool et je suis actuellement en recherche d'alternance.</p>
			</div>
		</div>
		<div class="separator">
			<div class="news">
				<h3>Recheche d'alternance</h3>
				<p>Suite à ma candidature à MyDigitalSchool, je suis actuellement en recherche d'un contrat d'alternance sur Montpellier.</p>
				<br>
				<p>Je suis prêt à m'investir à 100% dans des projets innovants, ayant une grande soif d'apprendre, le travail ne me fait pas peur. J'ai hâte de m'investir au sein d'une entreprise et de découvrir toutes les ficelles du métier.</p>
				<div class="atouts">
					<h3>Atouts</h3>
					<h4>Programmation front-end:</h4>
					<div style = "display: flex;">
						<p>HTML, CSS, Javascript</p>
						<button class="button-details" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFront" aria-expanded="false" aria-controls="collapseFront">Details</button>	
					</div>
					<div class="progress-bar-exp"><div class="progress-bar-exp-frontend animated">53%</div></div>
					
					<div class="collapse" id="collapseFront">
						<div style = "display: flex; margin-top: 10px;">
							<div style="margin-right:10px;">
								HTML<br>
								CSS<br>
								Javascript<br>
							</div>
							<div style="width:100%;">
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 70%;">70%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 60%;">60%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 30%;">30%</div></div>
							</div>
						</div>
					</div>
					<br>
					<h4>Programmation back-end:</h4>
					<div style = "display: flex;">
						<p>C#, php, C, C++, python</p>
						<button class="button-details" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBack" aria-expanded="false" aria-controls="collapseBack">Details</button>	
					</div>
					<div class="progress-bar-exp"><div class="progress-bar-exp-backend animated">50%</div></div>
					
					<div class="collapse" id="collapseBack">
						<div style = "display: flex; margin-top: 10px;">
							<div style="margin-right:10px;">
								C#<br>
								C/C++<br>
								PHP<br>
								Python<br>
							</div>
							<div style="width:100%;">
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 40%;">40%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 60%;">60%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 20%;">20%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 80%;">80%</div></div>
							</div>
						</div>
					</div>
					<br>
					<h4>Anglais:</h4>
					<p>Niveau C1</p>
					<div class="progress-bar-exp"><div class="progress-bar-exp-english animated">85%</div></div>
					<br>
				</div>
			</div>
			<div class="vline"></div>
			<div class="cv">
				<h3>Experiences</h3>
				<div class="experience animated-right">
					<div class="titre">
						<h4>Tuteur GoStudent</h4>
						<p class="lieu">à domicile</p>
					</div>
					<div class="description">
						<p class="periode"></p>
						<p>Cours particuliers de mathématiques et de physique à des élèves de la primaire jusqu'au lycée</p>
					</div>
				</div>
				<div class="hline"></div>
				<h3>Etudes</h3>
				<div class="experience animated-right">
					<div class="titre">
						<h4>DUT Mesure Physique</h4>
						<p class="lieu">IUT de Montpellier/sêtes, France</p>
					</div>
					<div class="description">
						<p class="periode">de 2017 à 2018</p>
						<p>Application de la physique aux mesures et mise en place du système de mesures. 1 ère année acquise</p>
					</div>
				</div>
				<div class="experience animated-right">
					<div class="titre">
						<h4>Licence</h4>
						<p class="lieu">Valrose université Nice, France</p>
					</div>
					<div class="description">
						<p class="periode">de 2018 à 2022</p>
						<p>Année 1 et 2 en science et technologie 240 ects validés dont 24 en informatique</p>
					</div>
				</div>
				<div class="hline"></div>
				<h3>Diplomes</h3>
				<div class="experience animated-right">
					<div class="titre">
						<h4>Baccalauréat général S,</h4>
						<p class="lieu">Charlemagne Carcassonne, France</p>
					</div>
					<div class="description">
						<p class="periode">2017</p>
						<p>Spécialité écologie agronomie et territoire sans mention</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="githubPicture" id="github"><h2>GitHub:</h2></div>
	<div class="github">
		<h3>Suite de Mandelbrot</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>Ce programme permet de générer une image de la suite de Mandelbrot. Le code a été fait dans mon temps libre durant ma licence.</p>
				<p>Le programme peut générer une image 1000x1000 de la suite de Mandelbrot en moins de 10 secondes.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://github.com/AJean-Baptiste/madelbrotcurve">page GitHub de la suite de Mandelbrot</a>
			</div>
			<img class="animated-right zoom" src="images/mandelbrot.jpg" target="_blank"></img>
		</div>
		<div class="hline"></div>
		<br>
		<h3>Algorithme génétique</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>Ce programme permet de résoudre des problèmes mathématiques ou physiques plus rapidement qu'avec un algorithme traditionnel.</p>
				<p>La problêmatique que mon programme résout est de trouver le maximum d'une fonction. Il est parfois difficile de trouver rapidement le maximum d'une fonction surtout si elle est complexe, grace a l'algorithme génétique ce problème est resolu en une fraction de seconde !</p>
				<p>Ce programme a été mon projet de mi-semestre de licence 3 physiques.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://github.com/AJean-Baptiste/genetic-algorithm" target="_blank">page GitHub de l'Algorithme génétique</a>
			</div>
			<img class="animated-right zoom" src="images/genetic.gif"></img>
		</div>
		<div class="hline"></div>
		<br>
		<h3>Mod d'interface pour le jeu trackmania</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>Ce mod a été fait en AngelScript, un cousin du Javascript, il a pour but de simuler un tournoi afin de s'entrainer et de voir le temps moyen que l'on effectue sur un circuit donné</p>
				<p>Ce programme m'a permis d'apprendre le fonctionnement d'une interface et comment faire attention à chaque détail du code pour que le programme tourne le plus rapidement possible afin d'éviter d'avoir des pertes d'images sur le jeu, en effet ce jeu est souvent joué à 140 IPS voire 240.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://github.com/AJean-Baptiste/MatchSimulator-Trackmania" target="_blank">page GitHub du simulateur de tournoi</a>
				<br><a style="text-decoration: none; color:var(--link-color);" href="https://openplanet.dev/plugin/matchsimulator" target="_blank">page de téléchargement du mod</a>
			</div>
			<img class="animated-right zoom" src="images/match.jpg"></img>
		</div>
		<div class="hline"></div>
		<br>
		<h3>Script python de ray-marching</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>Dans le cadre de mon projet de fin d'année de licence 3 physique, j'ai eu besoin de simuler de manière réaliste le tracé de rayon de lumière entre l'air et la surface de l'eau.</p>
				<p>Ce programme m'a permis d'en apprendre beaucoup sur le fonctionnement des moteurs de rendu de jeu vidéo comme de film d'animation. Mon programme utilise une méthode appelée Ray Marching, cette méthode de tracé les rayons est très efficace sur les surfaces régies par des fonctions mathématiques.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://github.com/AJean-Baptiste/Ray-marching-in-python" target="_blank">page GitHub du script de ray-marching</a>
			</div>
			<img class="animated-right zoom" src="images/parabole.png"></img>
		</div>
	</div>
	<div class="contact" id="contact">
		<h2 class="contact-title">Contact:</h2>
		<div>
			<div class="part"><i class="fa fa-phone"></i><p>Téléphone: +33 (0)7 81 31 65 17</p></div>
			<div class="part"><i class="fa fa-map-marker"></i><p>Montpellier, France</p></div>
			<div class="part"><i class="fa fa-envelope"></i><p>Email: prosper.auffret@gmail.com</p></div>
		</div>
		<form method="post" id="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'#contact');?>">

			<?php 
				if(!empty($errorMessage)){          
					echo $errorMessage;
				}
			?>
			<input type="text" id="name" name="name" placeholder="Name">
			<br>
			<input type="text" id="mail" name="mail" placeholder="Email">
			<br>
			<textarea id="message" name="message" placeholder="Message" style="height:200px"></textarea>
			<br>
			<input type="submit" value="Submit">

		</form>
	</div>
  </body>
</html>