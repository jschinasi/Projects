<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Team 17 Final Project
09/14/20 AT Original
10/28/2020 AT changed for best practices
File: About.php
------------------------------------------------------------------------------------------->
<!-- HTML Header -->
<html lang="en">
<head>
  <link href="CSS/css_styles.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Steezy</title>
</head>
<!-- Body of the Webpage -->
<body>
  <header>
  </header>
  <hr>
  <main>
    <h1 align=center>Who We Are</h1>
    <p align=center style="font-family: rockwell;"> We are an online marketplace
      for people to sell their new/used sneakers to customers willing to buy them.
      More information coming soon!</p>
  </main>
  <hr>
  <footer>
    <?php
      define('FILE_AUTHOR', array('Mehul Shetty','Jake Schinasi','Peter Schwartz'));
      include "footer.php";
    ?>
  </footer>
</body>
</html>
