<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Avengers</title>
	<link rel="stylesheet" type="text/css" href="../css/film.css">
  <link rel="stylesheet" type="text/css" href="../css/header.css">
</head>

<body>
  <header>
    <?php include('../include/headerf.php')?>
  <?php include('../include/connexion.php')?>
  </header>

  <main>
		<div class="container">
		<p class="affiche">
    <img src="../img/affiche6.jpeg" name="affiche" alt="affiche" width="350px" height="350px"/>
	</p>
			<?php

#

$reponse = $dbh->query("SELECT nom FROM acteurs NATURAL JOIN joue NATURAL JOIN films WHERE titre='Avengers'");
$reponse2 = $dbh->query("SELECT nom FROM realisateurs NATURAL JOIN realise NATURAL JOIN films WHERE titre='Avengers'");
$reponse3 = $dbh->query("SELECT annee FROM annee NATURAL JOIN sort NATURAL JOIN films WHERE titre='Avengers'");
$reponse4 = $dbh->query("SELECT resume FROM synopsis NATURAL JOIN resume NATURAL JOIN films WHERE titre='Avengers'");

$dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );

	?>
 <div>

	<video controls src="../ba/avengers.mp4">Ici la description alternative</video>


</div>


</div>



         <p>

  <p><strong>Acteurs:</strong> <?php while ($donnees = $reponse->fetch())
        {echo $donnees['nom'], " "; }?><br /></p>
  <p> <strong>Réalisateur:</strong> <?php while ($donnees2 = $reponse2->fetch())
	        {echo $donnees2['nom']." "; }?><br /></p>
	<p> <strong>Année de sortie :</strong> <?php while ($donnees3 = $reponse3->fetch())
					        {echo $donnees3['annee'], " "; }?><br /></p>
  	<strong>Synopsis :</strong> <?php while ($donnees4 = $reponse4->fetch())
		        {echo $donnees4	['resume'], " "; }?><br /></p>
</p>
  </main>

  <footer>
  </footer>
  <script src="js/scripts.js"></script>

</body>
</html>
