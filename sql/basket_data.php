<?php
include_once('connect_bdd.sql');

// nombre d'obets total
$req = $bdd->prepare('SELECT SUM(Nombres_produit) AS total FROM Produits WHERE 1');
$req->execute();
$data = $req->fetch();
$total = $data['total'];
$_SESSION['nb_object'] = $total;

// nombre d'obets differents
$req2 = $bdd->prepare('SELECT COUNT(DISTINCT Libelle) AS total2 FROM Produits WHERE 1');
$req2->execute();
$data2 = $req2->fetch();
$total2 = $data2['total2'];
$_SESSION['nb_object_distinct'] = $total2;

// recupere toutes les colonnes de produits
$req3 = $bdd->prepare('SELECT * FROM Produits');
$req3->execute(array());
$i = 1;
while($data3 = $req3->fetch())
{
	$_SESSION['ID'.$i] = $data3['ID'];
	$_SESSION['Img'.$i] = $data3['Img'];
	$_SESSION['Description'.$i] = $data3['Description'];
	$_SESSION['Libelle'.$i] = $data3['Libelle'];
	$_SESSION['Prix_achat'.$i] = $data3['Prix_achat'];
	$_SESSION['Prix_vente'.$i] = $data3['Prix_vente'];
	$_SESSION['Nombres_produit'.$i] = $data3['Nombres_produit'];
	$_SESSION['Date_creation'.$i] = $data3['Date_creation'];
	$_SESSION['Date_modification'.$i] = $data3['Date_modification'];
	$i++;
}

// nombre d'obets total
$req4 = $bdd->prepare('SELECT * FROM produit_utilisateur WHERE ID_utilisateur = :id');
$req4->execute(array('id' => $_SESSION['id']));
$data4 = $req4->fetch();
$total4 = $data4['Prix_vente'] * $data4['Nombres_produit'];
$_SESSION['prix_vente_total'] = $total4;


$req5 = $bdd->prepare('SELECT * FROM produit_utilisateur WHERE ID_utilisateur = :id');
$req5->execute(array('id' => $_SESSION['id']));

//affiche chaque objet dans le panier
function print_object($req5) {
$a = 1;
$i = 1;
while($a <= $_SESSION['nb_object_distinct'] && $data5 = $req5->fetch())
{
	$_SESSION['Libelle_user'.$i] = $data5['Libelle'];
	$_SESSION['Prix_achat_user'.$i] = $data5['Prix_achat'];
	$_SESSION['Prix_vente_user'.$i] = $data5['Prix_vente'];
	$_SESSION['Nombres_produits_user'.$i] = $data5['Nombres_produit'];
	$i++;
	$b = "count_plus" . $a;
?>
	<div class="bloc_basket">
		<img class="img_basket" src="<?php echo $_SESSION['Img'.$a]?>" alt="copyright"/>
			<div class="div_basket">
            <p class="text_basket"><a class="link" href="potions/teleportation.html"><?php echo $_SESSION['Libelle_user'.$a]?></a></p> <p class="price"> Price: <?php echo $_SESSION['Prix_vente_user'.$a]?> Cristals </p>
            <img id="img_1_plus" class="img_basket_plus <?php echo $b ?>" src="img/logo_plus.png" alt="add object"/>
			<button value="1" id="element1" class="text-element">Nombre(s) d'element(s) : <?php echo $_SESSION['Nombres_produits_user'.$a]?></button>
			<?php echo '<p id="price_object_totaux">' . $_SESSION['Prix_vente_user'.$a] . ' * ' . $_SESSION['Nombres_produits_user'.$a] . ' = ' .$_SESSION['Prix_vente_user'.$a] * $_SESSION['Nombres_produits_user'.$a]. ' cristals</p>'; 
			click_plus($a, $_SESSION['Libelle_user'.$a], '');
			?>
		</div>
	</div>
	<br>
<?php
$a++;
}
}

function click_plus($a, $c, $d) {
?>
	<script type="text/javascript" src="../Files/file.js"></script>
	<script type="text/javascript">plus<?php echo $d; ?>('<?php echo $a ?>', '<?php echo $c ?>');</script>
	<?php
}
?>