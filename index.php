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
			<div class="col-xs-12">
				<h1>Demande d'intervention</h1>
			</div>
		</div>
		
		<form action="send_intervention.php" method="post">
			
			<div class="row">
				<div class="form-group col-md-6">
					<label for="nom">Votre nom :</label>
					<input type="text" id="nom" class="form-control" name="nom" required>
				</div>
				
				<div class="form-group col-md-6">
					<label for="bureau">Bureau n° :</label>
					<input type="text" id="bureau" class="form-control" name="bureau" required>
				</div>
			</div>
			
			<div class="row">
				
				<div class="form-group col-md-12">
					<label for="problem">Votre problème concerne :</label> <br>
					<input type="radio" name="problem" value="Un ou plusieurs ordinateur(s)" required> Un ou plusieurs ordinateur(s)<br>
					<input type="radio" name="problem" value="Tous les ordinateurs" required> Tous les ordinateurs <br>
					<input type="radio" name="problem" value="Une imprimante" required> Une imprimante <br>
					<input type="radio" name="problem" value="Autre" required> Autre <br>
				</div>
				
			</div>
			
			<div class="row">
				<div class="form-group">
					<div class="col-md-6">
						<label for="info_pc">
							Eventuellement, saisissez le ou les numéro(s) d'ordinateur(s) qui vous pose(nt) un problème :
						</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" id="info_pc" name="info_pc" required>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-xs-12">
					<label for="description">Décrivez présisément votre problème :</label>
					<textarea id="description" class="form-control" name="description" required></textarea>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<button class="btn btn-success pull-right" type="submit">Valider</button>
				</div>
			</div>
			
		</form>
		
	</div>
	



</body>
</html>