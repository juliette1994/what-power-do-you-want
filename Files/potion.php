<!DOCTYPE html>
<html>
  <head>
    <meta name="Categories" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/potion.css">
    <title>Potions</title>
  </head>
  <header>
    <?php include_once('includes/menu_header.php'); ?>
  </header>
  <body>
    <div class="all_tri">
      <button id="tri_alpha">Sort by a-z</button>
      <button id="tri_price">Sort by price</button>
    </div>
    <div id="potions">
      <ul>
        <div class="inline-block tri" id="800">
          <img src="img/01.jpg" width="300" height="300" alt="Fire Potion"/>
          <li><a href="potions/potion.php?id=1">Fire Potion</a></li>
        </div>
        <div class="inline-block tri" id="800">
          <img src="img/02.jpg" width="300" height="300" alt="Water Potion"/>
          <li><a href="potions/potion.php?id=2">Water Potion</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="200">
          <img src="img/03.png" width="300" height="300" alt="Love Potion"/>
          <li><a href="potions/potion.php?id=3">Love Potion</a></li>
        </div>
        <div class="inline-block tri" id="600">
          <img src="img/04.png" width="300" height="300" alt="Teleportation Potion"/>
          <li><a href="potions/potion.php?id=4">Teleportation Potion</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="500">
          <img src="img/05.png" width="300" height="300" alt="Darkness Potion"/>
          <li><a href="potions/potion.php?id=5">Darkness Potion</a></li>
        </div>
        <div class="inline-block tri" id="800">
          <img src="img/06.png" width="300" height="300" alt="Wind Potion"/>
          <li><a href="potions/potion.php?id=6">Wind Potion</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="800">
          <img src="img/07.jpg" width="300" height="300" alt="Earth Potion"/>
          <li><a href="potions/potion.php?id=7">Earth Potion</a></li>
        </div>
        <div class="inline-block tri" id="300">
          <img src="img/08.jpg" width="300" height="300" alt="Invisibility Potion"/>
          <li><a href="potions/potion.php?id=8">Invisibility Potion</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="1000">
          <img src="img/09.jpg" width="300" height="300" alt="Invincibility Potion"/>
          <li><a href="potions/potion.php?id=9">Invincibility Potion</a></li>
        </div>
        <div class="inline-block tri" id="300">
          <img src="img/10.jpg" width="300" height="300" alt="Duplication Potion"/>
          <li><a href="potions/potion.php?id=10">Duplication Potion</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block tri" id="900">
          <img src="img/11.jpg" width="300" height="300" alt="Death Potion"/>
          <li><a  href="potions/potion.php?id=11">Death Potion</a></li>
        </div>
        <div class="inline-block tri" id="1500">
          <img src="img/12.jpg" width="300" height="300" alt="Prediction Potion"/>
          <li><a href="potions/potion.php?id=12">Prediction Potion</a></li>
        </div>
      </ul>
    </div>
   </body>
  <footer>
    <?php include_once('includes/menu_footer.php'); ?>
  </footer>
  <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="file.js"></script>
  <script type="text/javascript">tri_alpha("#potions");</script>
  <script type="text/javascript">tri_price("#potions");</script>
</html>
