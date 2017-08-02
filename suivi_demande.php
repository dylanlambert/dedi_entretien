<?php

session_start();

if(!isset($_SESSION["id"]))
{
  header('Location: connection.php');
}
$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=dedi-entretien', $user, $pass);

$sql = $dbh->prepare("SELECT * FROM `demande`");
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
				<h1>Suivi des demandes d'interventions informatiques</h1>
				
				<table class="table">
					<thead>
						<tr>
							<th></th>
							<th>Num</th>
							<th>Salle</th>
							<th>Description</th>
							<th>Remarques</th>
							<th>Demandée le</th>
							<th>Suivi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql->execute();
							
							$result = $sql->fetchAll(PDO::FETCH_OBJ);
							
							foreach ($result as $demande)
							{
								echo "<tr>";
									echo "<td><a href='show_demande.php?id=$demande->id'>Voir</a></td>";
									echo "<td>$demande->id</td>";
									echo "<td>$demande->bureau</td>";
									echo "<td>$demande->info_pc</td>";
									echo "<td>$demande->description</td>";
									echo "<td>$demande->date</td>";
									echo "<td>$demande->suivi</td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</body>
</html>
