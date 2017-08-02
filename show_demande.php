<?php

session_start();

if(!isset($_SESSION["id"]))
{
	header('Location: connection.php');
}
$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=dedi-entretien', $user, $pass);

$sql = $dbh->prepare("SELECT * FROM `demande` WHERE id = ?");
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dedi entretien</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php
				$sql->execute(array($_GET["id"]));
				$result = $sql->fetchAll(PDO::FETCH_OBJ);
			?>
			<h1>Demande n° <?= $result[0]->id ?></h1>
			
			<p><strong>Nom</strong> : <?= $result[0]->nom ?></p>
			<p><strong>Bureau</strong> : <?= $result[0]->bureau ?></p>
			<p><strong>Problème</strong> : <?= $result[0]->problem ?></p>
			<p><strong>Pc en cause</strong> : <?= $result[0]->info_pc ?></p>
			<p><strong>Description</strong> : <?= $result[0]->description ?></p>
			<p><strong>Date</strong> : <?= $result[0]->date ?></p>
			<p><strong>Suivi</strong> : <?= $result[0]->suivi ?></p>
			
			<a href="close.php?id=<?= $result[0]->id ?>" class="btn btn-success">Changé le statut en réparé</a>
		
		</div>
	</div>
</div>
</body>
</html>
