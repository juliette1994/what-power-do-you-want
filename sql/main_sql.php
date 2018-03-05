<?php
include_once('connect_bdd.sql');

$id = $_GET['id'];
$req = $bdd->prepare('SELECT * FROM Produits WHERE ID = :id');
$req->execute(array('id' => $id));
$data = $req->fetch();
?>

<div id="image">
<img src="../<?php echo $data[img] ?>" width="300" height="300" alt="Darkness Potion"/>
</div>
<div id="Description">
<h1 id="titre"><?php echo $data['Libelle'] ?></h1>
<p id="texte"><?php echo $data['Description'] ?></p>
</div>
<div id="prix">
<p>Price: <?php echo $data['Prix_vente'] ?> Cristals</p>
<img class="img_basket" src="../img/add_to_basket_button.png" alt="add to basket"></img>
</div>
