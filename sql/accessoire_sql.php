<?php
include_once('connect_bdd.sql');

$id = $_GET['id'];
$req = $bdd->prepare('SELECT * FROM Produits WHERE ID = :id');
$req->execute(array('id' => $id));
$data = $req->fetch();
?>

<div id="image">
<img src="../<?php echo $data[Img] ?>" width="300" height="300" alt="Darkness Potion"/>
</div>
<div id="Description">
<h1 id="titre"><?php echo $data['Libelle'] ?></h1>
<p id="texte"><?php echo $data['Description'] ?></p>
</div>
<div id="prix">
<p>Price: <?php echo $data['Prix_vente'] ?> Cristals</p>
<img class="img_basket<?php echo $id?>" src="../img/add_to_basket_button.png" alt="add to basket"></img>
</div>

<?php
if (!isset($_SESSION['id']))
        session_start();
function click_plus($a, $c) { ?>
<script type="text/javascript" src="../file.js"></script>
<script type="text/javascript">plus_2('<?php echo $a ?>', '<?php echo $c ?>');</script>
<?php
}
?>