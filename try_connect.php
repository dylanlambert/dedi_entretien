<?php
session_start();

$user_site = $_POST["utilisateur"];
$pass_site = md5($_POST["password"]);

$demande = $_SESSION["demande"];
$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=dedi-entretien', $user, $pass);

$sql = $dbh->prepare("SELECT * FROM `user` WHERE `name` = ? AND `password` = ?");

try
{
	$sql->execute(array($user_site, $pass_site));
	
	$result = $sql->fetchAll(PDO::FETCH_OBJ);
	
	$_SESSION["id"] = $result[0]->id;
	$_SESSION["name"] = $result[0]->name;
	$_SESSION["pass"] = $result[0]->password;
	
	header("Location: suivi_demande.php");
	
}
catch (Exception $e)
{
	echo "une erreur est survenue";
}
