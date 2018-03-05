<?php include_once('../sql/control.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="Sign up" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/sign_up.css">
    <title>Login</title>
  </head>
  <header>
    <?php include_once('includes/menu_header.php'); ?>
  </header>
  <body>
    <div id="sign_up_carre">
      <div id="sign_title">
        <h1 id="title">Login</h1>
        <hr/>
        </div>
      <div id="containers">
        <FORM METHOD="post" ACTION="../sql/connexion.php">
          <LABEL for="pseudo">Pseudo : </LABEL>
          <INPUT type="text" name="pseudo" placeholder="Pseudo" required><br/>
          <LABEL for="password">Password : </LABEL>
          <INPUT type="password" name="password" placeholder="Password" required><br/>
          <INPUT id="input_send" type="submit" value="send" type="submit"/>
        </form>
      </div>
    </div>
  </body>
  <footer>
    <?php include_once('includes/menu_footer.php'); ?>
  </footer>
</html>
