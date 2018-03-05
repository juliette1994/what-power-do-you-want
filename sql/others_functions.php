<?php
include_once('connect_bdd.sql');

$req = $bdd->prepare('SELECT SUM(Nombres_produit) AS total FROM Produits WHERE 1');
$req->execute();
$data = $req->fetch();
$total = $data['total'];
$_SESSION['nb_object'] = $total;
$_SESSION['begin'] = $total;
?>