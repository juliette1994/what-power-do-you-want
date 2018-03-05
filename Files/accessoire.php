<!DOCTYPE html>
<html>
  <head>
    <meta name="Categories" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/accessoire.css">
    <title>Accessories</title>
  </head>
    <header>
      <?php include_once('includes/menu_header.php'); ?>
    </header>
    <body>
    <div class="all_tri">
      <button id="tri_alpha">Sort by a-z</button>
      <button id="tri_price">Sort by price</button>
    </div>
    <div id="accessories">
      <ul>
        <div class="inline-block tri" id="900">
          <img src="img/a1.jpg" width="300" height="300" alt="Magic Ball"/>
          <li><a href="accessoires/accessoire.php?id=13">Magic Ball</a></li>
        </div>
        <div class="inline-block tri" id="800">
          <img src="img/a2.jpg" width="300" height="300" alt="Magic Stick"/>
          <li><a href="accessoires/accessoire.php?id=14">Magic Stick</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="500">
          <img src="img/a3.jpg" width="300" height="300" alt="Magic Cauldron"/>
          <li><a href="accessoires/accessoire.php?id=15">Magic Cauldron</a></li>
        </div>
        <div class="inline-block tri" id="800">
          <img src="img/a4.jpeg" width="300" height="300" alt="Magic Broom"/>
          <li><a href="accessoires/accessoire.php?id=16">Magic Broom</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="2000">
          <img src="img/a5.jpg" width="300" height="300" alt="Magic Book"/>
          <li><a href="accessoires/accessoire.php?id=17">Magic Book</a></li>
        </div>
        <div class="inline-block tri" id="900">
          <img src="img/a6.jpg" width="300" height="300" alt="Magic Carpet"/>
          <li><a href="accessoires/accessoire.php?id=18">Magic Carpet</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="1200">
          <img src="img/a7.jpg" width="300" height="300" alt="Magic Scroll"/>
          <li><a href="accessoires/accessoire.php?id=19">Magic Scroll</a></li>
        </div>
        <div class="inline-block tri" id="1000">
          <img src="img/a8.jpg" width="300" height="300" alt="Magic Watch-pocket"/>
          <li><a href="accessoires/accessoire.php?id=20">Magic Watch-pocket</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="500">
          <img src="img/a9.jpg" width="300" height="300" alt="Magic Key"/>
          <li><a href="accessoires/accessoire.php?id=21">Magic Key</a></li>
        </div>
        <div class="inline-block tri" id="700">
          <img src="img/a10.gif" width="300" height="300" alt="Magic Candle"/>
          <li><a href="accessoires/accessoire.php?id=22">Magic Candle</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="500">
          <img src="img/a11.jpg" width="300" height="300" alt="Magic Pencil"/>
          <li><a href="accessoires/accessoire.php?id=23">Magic Pencil</a></li>
        </div>
        <div class="inline-block tri" id="1500">
          <img src="img/a12.jpg" width="300" height="300" alt="Magic Shield"/>
          <li><a href="accessoires/accessoire.php?id=24">Magic Shield</a></li>
        </div>
      </ul>
    </div>
  </body>
  <footer>
    <?php include_once('includes/menu_footer.php'); ?>
  </footer>
  <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="file.js"></script>
  <script type="text/javascript">tri_alpha("#accessories");</script>
  <script type="text/javascript">tri_price("#accessories");</script>
</html>
