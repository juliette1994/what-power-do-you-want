<!DOCTYPE html>
<html>
  <head>
    <meta name="Sign up" content="HTML, CSS", "XHTML">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/sign_up.css">
    <title> Contact </title>
  </head>
  <header>
    <?php include_once('includes/menu_header.php'); ?>
  </header>
  <body>
     <div id="sign_up_carre">
       <div id="sign_title">
          <h1 id="title">Contact</h1>
          <hr/>
       </div>
       <div id="containers">
         <FORM METHOD="post" ACTION="index.html">
           <LABEL for="first_name">First name : </LABEL>
           <INPUT type="text" name="first_name" placeholder="What is your first name ?"><br/>
           <LABEL for="last_name">Last name : </LABEL>
           <INPUT type="text" name="last_name" placeholder="What is your last name ?"><br/>
           <LABEL for="email">Email : </LABEL>
           <INPUT type="email" name="email" placeholder="Email"><br/>
           <LABEL for="pseudo">Pseudo : </LABEL>
           <INPUT type="text" name="pseudo" placeholder="Pseudo"><br/>
           <LABEL for="description">Message : </LABEL>
           <textarea id="description" type="text" name="message" placeholder="Message" cols="40" rows="10"></textarea>
           <INPUT id="input_send" type="submit" value="send" type="submit"/>
         </form>
       </div>
     </div>
  </body>
  <footer>
    <?php include_once('includes/menu_footer.php'); ?>
  </footer>
</html>
