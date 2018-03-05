<?php
require_once '../sql/others_functions.php';
if (!isset($_SESSION))
	session_start();
if (isset($_SESSION['id']))
{ ?>
   <nav id="menu_haut">
   <ul>
     <li class="profil_img"><img alt="profil" src="img/profil.png" height="20" width="20"/><a class="profil_click">Account</a></li>
	   <ul class="inline_block_profil">
	     <div class="visible">
	       <a class="espace_account">My informations</a>
	       <a class="espace_account">Cristals</a>
	     </div>
	</ul>
    <li><a class="invisible_menu_header" href="../index.php">Home</a></li>
    <li><a class="invisible_menu_header" href="categories.php">Categories</a></li>
    <li><a class="invisible_menu_header" href="course.php">Course</a></li>
    <li><a class="invisible_menu_header" href="basket.php">Basket (<?php if(isset($_SESSION['begin'])) {echo $_SESSION['nb_object'];} ?>)</a></li>
    <li><a class="invisible_menu_header" href="faq.php">FAQ</a></li>
    <li><a class="invisible_menu_header" href="../sql/logout.php">Logout</a></li>
  </ul>
</nav>
<?php
}
else { ?>
<nav id="menu_haut">
  <ul>
    <li><a href="../index.php">Home</a></li>
    <li><a href="categories.php">Categories</a></li>
    <li><a href="course.php">Course</a></li>
    <li><a href="faq.php">FAQ</a></li>
    <li><a href="sign_up.php">Sign up</a></li>
    <li><a href="log_in.php">Log in</a></li>
  </ul>
</nav>
<?php } 
?>
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="functions.js"></script>
<script type="text/javascript">cursor();</script>
<script type="text/javascript">profil_menu();</script>
</script>