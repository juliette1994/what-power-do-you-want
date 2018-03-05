<!DOCTYPE html>
<html>
  <head>
    <meta name="Categories" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/potion.css">
    <title>Course</title>
  </head>
  <header>
    <?php include_once('includes/menu_header.php'); ?>
  </header>
  <body>
    <div id="potions">
      <ul>
        <div class="inline-block">
          <img src="img/alchimie.jpeg" width="300" height="240" alt="Alchemistry"/>
          <li><a href="courses/Alchemistry.html">Alchemistry</a></li>
        </div>
        <div class="inline-block">
          <img src="img/divination.jpeg" width="300" height="240" alt="Divination"/>
          <li><a href="courses/Divination.html">Divination</a></li>
        </div>
        <br class="block"/>
        <div class="inline-block">
          <img src="img/sortileges.jpeg" width="300" height="240" alt="Spells"/>
          <li><a href="courses/Spells.html">Spells</a></li>
        </div>
        <div class="inline-block">
          <img src="img/fantome.jpg" width="300" height="240" alt="Parapsychology"/>
          <li><a href="courses/Parapsychology.html">Parapsychology</a></li>
        </div>
      </ul>
    </div>
  </body>
  <footer>
    <?php include_once('includes/menu_footer.php'); ?>
  </footer>
</html>
