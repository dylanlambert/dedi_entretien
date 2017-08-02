<?php

	session_start();
	if(isset($_SESSION["id"]))
	{
		header('Location: suivi_demande.php');
	}
	
	
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
			<h1>Connection: </h1>
		</div>
	</div>
	
	<div class="row">
		<form action="try_connect.php" method="post">
			
			<div class="form-group col-md-6">
				<label for="utilisateur">Utilisateur :</label>
				<input type="password" name="utilisateur" id="utilisateur" class="form-control" required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="password">Mot de passe :</label>
				<input type="password" name="password" id="password" class="form-control" required>
				
				
				<br><br>
				
				<button class="btn btn-success pull-right" type="submit">Connection</button>
				
			</div>
			
			
		</form>
	</div>
</div>



</body>
</html>

