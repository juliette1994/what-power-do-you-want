<!DOCTYPE html>
<html>
  <head>
    <meta name="Categories" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="../css/pages.css">
    <link rel="stylesheet" type="text/css" href="../css/description_potions.css">
  </head>
  <body>
    <title>Potion</title>
    <nav id="menu_haut">
      <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../categories.php">Categories</a></li>
        <li><a href="../course.php">Course</a></li>
	<li><a class="basket_count" value="0" href="../basket.php">Basket (3)</a></li>
	<li><a href="../faq.php">FAQ</a></li>
        <li><a href="../sign_up.php">Sign up</a></li>
        <li><a href="../log_in.php">Log in</a></li>
      </ul>
    </nav>
    <div id="element">
      <?php include_once('../../sql/potion_sql.php'); ?>
      <div id="commentaire">
        <textarea name="comments" id="comments" style="text" placeholder="Comments" cols="96" rows="2" value=""></textarea>
        <input id="submit" type="submit" value="SEND">
      </div>
    </div>
  </body>
  <footer>
    <nav id="menu_footer">
      <div class="bloc_footer">
        <ul>
          <a href="../contact.php"><img id="contact" class="img" src="../img/contact.png" alt="contact"/></a>
          <img class="img" src="../img/copyright.png" alt="copyright"/>
          <img class="img" src="../img/paiement.png" alt="paiement"/>
        </ul>
      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="../jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="../comments.js"></script>
  <script type="text/javascript" src="../file.js"></script>
  <script type="text/javascript">
    ajout_comments();
  </script>
  <?php
     $id = $_GET['id'];
     click_plus($id, $_SESSION['Libelle'.$id], '_2');
  ?>
</html>
