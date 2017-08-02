<?php

session_start();

if(!isset($_SESSION["id"]))
{
	header('Location: connection.php');
}
else
{
	
	$user = "root";
	$pass = "root";
	$dbh = new PDO('mysql:host=localhost;dbname=dedi-entretien', $user, $pass);
	
	$sql = $dbh->prepare("UPDATE `dedi-entretien`.`demande` SET `suivi` = 'Repare' WHERE `demande`.`id` = ?");
	
	try
	{
		$sql->execute(array($_GET["id"]));
		header("Location: suivi_demande.php");
	}
	catch(Exception $e)
	{
		echo "une erreur est survenue";
	}
	
}
?>