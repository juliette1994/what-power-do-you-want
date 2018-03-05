<?php include_once('../sql/control.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="Sign up" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/sign_up.css">
    <title>Sign up</title>
  </head>
  <header>
    <?php include_once('includes/menu_header.php'); ?>
  </header>
  <body>
    <div id="sign_up_carre">
      <div id="sign_title">
        <h1 id="title">Sign up</h1>
        <hr/>
        </div>
      <div id="containers">
        <FORM METHOD="POST" ACTION="../sql/sign_up_insert.php">
          <LABEL for="pseudo">Pseudo : </LABEL>
          <INPUT type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required><br/>
          <LABEL for="password">Password : </LABEL>
          <INPUT type="password" name="password" id="password" placeholder="Password" required><br/>
          <LABEL for="email">Email : </LABEL>
          <INPUT type="email" name="email" id="email" placeholder="Email" required><br/>
          <LABEL for="first_name">First name : </LABEL>
          <INPUT type="text" name="first_name" id="first_name" placeholder="What is your first name ?" required><br/>
          <LABEL for="last_name">Last name : </LABEL>
          <INPUT type="text" name="last_name" id="last_name" placeholder="What is your last name ?" required><br/>
          <LABEL for="age">Age : </LABEL>
          <INPUT type="number" name="age" id="age" placeholder="How old are you ?" min="1" required><br/>
          <LABEL for="adress">Adress : </LABEL>
          <INPUT type="text" name="adress" id="adress" placeholder="exemple : Paris, 75004" required><br/>
          <LABEL for="description">Small description of you : </LABEL>
          <textarea id="description" type="text" name="description" placeholder="description" cols="80" rows="10"></textarea>
          <INPUT id="input_send" type="submit" value="send" type="submit"/>
        </form>
      </div>
    </div>
  </body>
    <footer>
      <?php include_once('includes/menu_footer.php'); ?>
    </footer>
</html>
