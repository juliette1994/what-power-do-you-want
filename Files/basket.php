<?php include_once('../sql/control2.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="Sign up" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/sign_up.css">
    <link rel="stylesheet" type="text/css" href="css/basket_and_faq.css">
    <title> Basket </title>
  </head>
  <header>
    <?php 
	include_once('includes/menu_header.php'); 
	include_once('../sql/basket_data.php'); 
	?>
  </header>
  <body>
    <div id="sign_up_carre">
      <div id="sign_title">
        <h1 id="title">Basket</h1>
        <hr/>
        <br/>
      </div>
      <div id="containers">
        <img id="img_title" src="img/basket.png" alt="copyright"/><p class="title_basket">You have <?php if(isset($_SESSION['begin'])) {echo $_SESSION['nb_object'];} ?> items in your basket 
        (<?php if(isset($_SESSION['begin'])) {echo $_SESSION['nb_object_distinct'];}?> different)</p>
      </div>
      <br/>
      <hr/>
      <br/>
      <div id="round">
	  <?php print_object($req5); ?>
 <!--       <div class="bloc_basket">
          <img class="img_basket" src="img/04.png" alt="copyright"/>
          <div class="div_basket">
            <p class="text_basket"><a class="link" href="potions/teleportation.html">Teleportation potion</a></p> <p class="price"> Price: 600 Cristals </p>
            <img id="img_1_plus" class="img_basket_plus" src="img/logo_plus.png" alt="add object"/>
	    <img id="img_1_moins" class="img_basket_moins" src="img/logo_moins.png" alt="add object"/> 
	    <button value="1" id="element1" class="text-element">Nombre(s) d'element(s) :</button>
	  </div>
        </div>
        <hr/>
          <div class="bloc_basket">
            <img class="img_basket" src="img/a1.jpg" alt="copyright"/> 
            <div class="div_basket"> 
              <p class="text_basket"><a class="link" href="accessoires/ball.html">Magic ball</a></p> <p class="price"> Price: 900 Cristals </p>
	      <img id="img_2_plus" class="img_basket_plus" src="img/logo_plus.png" alt="add object"/>
              <img id="img_2_moins" class="img_basket_moins" src="img/logo_moins.png" alt="add object"/>
	      <button value="1" id="element2" class="text-element">Nombre(s) d'element(s) :</button>
          </div>
        </div>
        <hr/>
        <div class="bloc_basket">
          <img class="img_basket" src="img/a10.gif" alt="copyright"/>
          <div class="div_basket">
            <p class="text_basket"><a class="link" href="accessoires/candle.html">Magic candle</a></p> <p class="price"> Price: 700 Cristals </p>
	    <img id="img_3_plus" class="img_basket_plus" src="img/logo_plus.png" alt="add object"/>
            <img id="img_3_moins" class="img_basket_moins" src="img/logo_moins.png" alt="add object"/>
	    <button value="1" id="element3" class="text-element">Nombre(s) d'element(s) :</button>
          </div>
        </div>
		-->
        <hr/>
	  <div class="bloc_basket">
            <div class="div_basket">
              <p value="2200" class="text_total"><a>Total: <?php echo $_SESSION['prix_vente_total']?> cristals</a></p>
            </div>
          </div>
      </div>
      <br/>
    </div>
  </body>
  <footer>
    <?php include_once('includes/menu_footer.php'); ?>
  </footer>
  <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="file.js"></script>
  <!--  <script type="text/javascript">basket_count("#img_1_plus", "#img_1_moins", "#element1");</script>
  <script type="text/javascript">basket_details();</script>
  <script type="text/javascript">basket_count("#img_2_plus", "#img_2_moins", "#element2");</script>
  <script type="text/javascript">basket_count("#img_3_plus", "#img_3_moins", "#element3");</script> 
  <script type="text/javascript">add_basket();</script> -->
</html>
