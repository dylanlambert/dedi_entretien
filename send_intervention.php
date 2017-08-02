<?php

	include "include/Demande.php";

	// Get value
	$nom = $_POST["nom"];
	$bureau = $_POST["bureau"];
	$problem = $_POST["problem"];
	$info_pc = $_POST["info_pc"];
	$description = $_POST["description"];
	
	$demande = new Demande($nom, $bureau, $problem, $info_pc, $description);
	
	session_start();
	$_SESSION["demande"] = $demande;
	
	
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
	<link rel="stylesheet" href="dist/css/style.css">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			
			<h1>Récapitulatif</h1>
			
			<p>Votre nom : <?=  $demande->getNom() ?></p>
			<p>Numéro de la salle : <?=  $demande->getBureauNumber() ?></p>
			<p>Il y a un problème sur : <?= $demande->getProblem() ?> - <?= $demande->getInfoPc() ?></p>
			<p><?= $demande->getDescription() ?></p>
			
			<a href="injection_sql.php" class="btn btn-block btn-success">Je confirme ma demande d'intervention</a>
			
		</div>
	</div>
</div>

</body>
</html>
	