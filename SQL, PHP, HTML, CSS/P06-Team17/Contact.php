<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Team 17 Project 6
V1.0  09/20/20 AT Original
V1.1  10/28/2020 AT changed for best practices
File: Contact.php
---------------------------------------------------------------------------------------->
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
    <?php
      include "navigation.php";
    ?>
  </header>
  <hr>
  <main>
    <h1 style="text-align:center;">Contact</h1><br>
    <div class="contact-us-rows">
      <div class="col-65" style="padding: 35px; font-size: 30px;">
        <p style="font-family:rockwell; font-size:45px;">Call Us:<br></p>
        1800-STEEZY-COM<br><br><br>
        <p style="font-family:rockwell; font-size:45px;">Drop Us An Email:<br></p>
        <a href="mailto:mehul.shetty1@marist.edu" style="color:black;">support@steezy.com</a>
      </div>
      <div class="col-35">
        <center>
        <img src="images/contact-us.jpg" height="500px">
        </center>
      </div>
    </div>
  </main>
  <hr>
  <footer>
    <?php
      include "footer.php";
    ?>
  </footer>
</body>
</html>
