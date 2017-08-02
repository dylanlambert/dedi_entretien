<?php

    include "include/Demande.php";
	session_start();
	$demande = $_SESSION["demande"];
	$user = "root";
	$pass = "root";
	$dbh = new PDO('mysql:host=localhost;dbname=dedi-entretien', $user, $pass);

	$sql = $dbh->prepare("INSERT INTO `demande` (`nom`,`bureau`,`problem`,`info_pc`,`description`) VALUES (?,?,?,?,?);");
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Dedi entretien</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">
				<?php
				try
				{
					$sql->execute(array($demande->getNom(), $demande->getBureauNumber(), $demande->getProblem(), $demande->getInfoPc(), $demande->getDescription()));
					echo "Votre demande à été envoyée";
					header("refresh:2;url=index.php");
				}
				catch(Exception $e)
				{
					echo "une erreur est survenue";
				}
				
				
				?></h1>
		</div>
	</div>
</div>



</body>
</html>

