<!DOCTYPE html>
<html>
  <head>
    <meta name="What power do you want ?" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="Files/css/pages.css">
    <title>What power do you want ?</title>
  </head>
  <header>
    <?php include_once('Files/includes/menu_header_index.php'); ?>
  </header>
  <body>
    <div id="header">
      <h1 id="title1">WHAT POWER DO</h1>
      <h1 id="title2">YOU WANT ?</h1>
    </div>
    <div id="touche1">
      <h4><a class="white" href="Files/potions/potion.php?id=3">GOOD ONES</a></h4>
    </div>
    <div id="touche2">
      <h4><a class="white" href="Files/potions/potion.php?id=11">BAD ONES</a></h4>
    </div>
    <div class="news">
      <div class="description_news">
	<img src="Files/img/basket.png" id="img_basket_achat" width="90" height="70" alt="basket"/><br/>
	<img src="Files/img/dragon.png" id="img_achat" width="150" height="100" alt="Dungeon prohibited"/><p class="titre_achat">Buy Dungeon prohibited : 60 euros</p>
      </div>
    </div>
    <div class="news">
      <div class="menu_news">
        <p id="title_news">Last news</p>
        <hr/>
        <div>
          <div class="description_news">
            <img src="Files/img/alchemy_news.png" width="70" height="70" alt="news alchemy"/><p>Starting from nextmonth, we will have a promotion of 50% in the course Archemistry.</p>
          </div>
          <hr/>
          <div class="description_news">
            <img src="Files/img/stock.jpeg" width="70" height="70" alt="news stock"/><p>We have news potions in stock:</p>
            <p>- Invisibility Potion (6)</p>
            <p>- Duplication Potion (12)</p>
            <p>- Death Potion (2)</p>
            <p>- Prediction Potion (5)</p>
          </div>
          <hr/>
          <div class="description_news">
            <img src="Files/img/a2.jpg" width="70" height="70" alt="news magic_stick"/><p>Now is available, astrange object for the price of 800 crystals.</p>
            <p>This stick is made of precious woods and can cast spells, so be careful.</p>
          </div>
          <hr/>
          <div class="description_news">
            <img src="Files/img/a12.jpg" width="70" height="70" alt="news magic_shield"/><p>Shortly, we will have a very special shield that can counter any destruction spells.</p>
            <p>Also, it can useful as a dangerous weapon!</p>
          </div>
          <hr/>
            <div class="description_news">
              <img src="Files/img/a5.jpg" width="70" height="70" alt="news magic_book"/><p>Attentiveness everyone, a curse book will appear soon.</p>
              <p>HIHI, someone will die soon.</p>
          </div>
          <hr/>
            <div class="description_news">
              <img src="Files/img/a10.gif" width="70" height="70" alt="news cristaux_promo"/><p>At Halloween, we promote 5000 crystals for the only amount of 40 euros.</p>
            </div>
            <br/>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <nav id="menu_footer">
      <div class="bloc_footer">
        <ul>
          <a href="Files/contact.php"><img id="contact" class="img" src="Files/img/contact.png" alt="contact"/></a>
          <img class="img" src="Files/img/copyright.png" alt="copyright"/>
	        <img class="img" src="Files/img/paiement.png" alt="paiement"/>
        </ul>
      </div>
    </nav>
  </footer>
</html>
