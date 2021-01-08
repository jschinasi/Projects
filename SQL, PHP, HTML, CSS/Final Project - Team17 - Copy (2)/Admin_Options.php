<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Team 17 Final Project
V1.0  09/19/20 AT Original
V1.11  10/28/2020 AT changed for best practices
File: Admin_Options.php
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
  </header>
  <hr>
  <main>
    <h1 style="text-align:center;font-family:sans-serif;">Admin Options</h1>
    <br><br><br><br>
    <center>
    <table border=1 style="font-family:sans-serif;">
    <tr>
      <th>Options</th>
      <th>Description</th>
    </tr>
    <tr>
      <td><a href="Team17-Project Document.pdf">Project Document</a></td>
      <td>Document describing all the features of the project.</td>
    </tr>
    <tr>
      <td><a href="phpinfo.php">PHP Info</a></td>
      <td>Description of the PHP Version being used on this host.</td>
    </tr>
    <tr>
      <td><a href="User_Table.php">User Table</a></td>
      <td>Displays the table containing all the user data.</td>
    </tr>
    <tr>
      <td><a href="Products_Table.php">Products Table</a></td>
      <td>Displays the table containing all the products data.</td>
    </tr>
    <tr>
      <td><a href="Supplier_Table.php">Supplier Table</a></td>
      <td>Displays the table containing all the supplier data.</td>
    </tr>
    </table>
    </center>
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
