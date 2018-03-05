<?php
include_once('connect_bdd.sql');
session_start();
$name = $_GET['name'];
$nb = $_GET['nb'];
$verif = $bdd->prepare("SELECT * FROM produit_utilisateur WHERE Libelle = :name AND ID_utilisateur = :ID_utilisateur");
$verif->execute(array(
	'name' => $name,
	'ID_utilisateur' => $_SESSION['id']
	)); 
$rows = 0;
while($rows = $verif->fetch());
	$rows++;
if ($rows == 0)
{ 
	$req = $bdd->prepare("INSERT INTO produit_utilisateur (ID_produit, ID_utilisateur, Libelle, Prix_achat, Prix_vente, Nombres_produit) VALUES (ID_produit = :ID_produit AND ID_utilisateur = :ID_utilisateur
		AND Libelle = :Libelle AND Prix_achat = :Prix_achat AND Prix_vente = :Prix_vente AND Nombres_produit = :Nombres_produit)");
	$req->execute(array( 
	'ID_produit' =>  $_SESSION['potion_ID_produit'],
	'ID_utilisateur' =>  $_SESSION['id'],
	'Libelle' => $name,
	'Prix_achat' => $_SESSION['potion_Prix_achat'],
	'Prix_vente' => $_SESSION['potion_Prix_vente'],
	'Nombres_produit' => $nb 
	)); $rows = 'insert';
}
else
{
	$req = $bdd->prepare("UPDATE produit_utilisateur SET Nombres_produit = :nbr WHERE Libelle = :Libelle");
	$req->execute(array('nbr' => $nb,'Libelle' => $name)); $rows = 'update';
}
header('Location: ../Files/basket.php?id='.$name.$_SESSION['id'].$rows);
?>