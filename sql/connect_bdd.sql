<?php
$VALEUR_hote='localhost';
$VALEUR_port='localhost';
$VALEUR_nom_bd='WhatPowerDoYouWant_qu_j';
$VALEUR_user='root';
$VALEUR_mot_de_passe='';
try
{
	$bdd = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
