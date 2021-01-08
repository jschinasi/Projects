<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Team 17 Final Project
V1.0  09/23/20 AT Original
V1.1  10/28/2020 AT changed for best practices
File: Changelog.php
------------------------------------------------------------------------------------------->
<html lang="en">
<head>
  <link href="CSS/css_styles.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Steezy</title>
  <style>
    table {background-color: white; color: black; font-weight: normal; font-family: rockwell;}
    th    {background-color: gray;}
  </style>
</head>
<!-- Body of the Webpage -->
<body>
  <header>
  </header>
  <hr>
  <main>
    <h2 align=center>Project Change Log</h2>
    <table border=1 align=center>
      <tr>
    		<th>Change #</th>
        <th>Date</th>
        <th>Description</th>
        <th>Status</th>
        <th>Sign-off</th>
      </tr>
    	<tr>
    		<td>V 0.01</td>
        <td>09/11/20</td>
        <td>Create Website Disclaimer.</td>
        <td>Finished</td>
        <td>PS</td>
      </tr>
    	<tr>
    		<td>V 0.02</td>
        <td>09/11/20</td>
        <td>Create Steezy Homepage.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
    	<tr>
    		<td>V 0.03</td>
        <td>09/11/20</td>
        <td>Add "Latest Arrivals" to homepage.</td>
        <td>Finished</td>
        <td>JS</td>
      </tr>
    	<tr>
    		<td>V 0.04</td>
        <td>09/13/20</td>
        <td>Add Nike, Adidas, Skechers, and Puma products to homepage.</td>
        <td>Finished</td>
        <td>JS</td>
      </tr>
    	<tr>
    		<td>V 0.05</td>
        <td>09/13/20</td>
        <td>Update style of homepage.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
    	<tr>
    		<td>V 0.06</td>
        <td>09/14/20</td>
        <td>Create "About" page.</td>
        <td>Finished</td>
        <td>PS</td>
      </tr>
    	<tr>
    		<td>V 0.07</td>
        <td>09/14/20</td>
        <td>Create "Men" shopping page.</td>
        <td>Finished</td>
        <td>PS</td>
      </tr>
    	<tr>
    		<td>V 0.08</td>
        <td>09/15/20</td>
        <td>Add products to "Men" shopping page.</td>
        <td>Finished</td>
        <td>JS</td>
      </tr>
    	<tr>
    		<td>V 0.09</td>
        <td>09/16/20</td>
        <td>Update "Steezy" logo and added to existing site.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
    	<tr>
    		<td>V 0.10</td>
        <td>09/18/20</td>
        <td>Create Sign In page.</td>
        <td>Finished</td>
        <td>PS</td>
      </tr>
    	<tr>
    		<td>V 0.11</td>
        <td>09/19/20</td>
        <td>Update Disclaimer.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
    	<tr>
    		<td>V 0.12</td>
        <td>09/20/20</td>
        <td>Create "Contact Us" page.</td>
        <td>Finished</td>
        <td>PS</td>
      </tr>
    	<tr>
    		<td>V 1.0</td>
        <td>09/21/20</td>
        <td>Add "Spring Collection" to homepage.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
    	<tr>
    		<td>V 1.01</td>
        <td>09/23/20</td>
        <td>Update prices of Men's "Jordan" shoes.</td>
        <td>Finished</td>
        <td>JS</td>
      </tr>
      <tr>
    		<td>V 1.02</td>
        <td>09/18/20</td>
        <td>Add products to "Women" shopping page.</td>
        <td>Finished</td>
        <td>JS</td>
      </tr>
	    <tr>
        <td>V 1.03</td>
        <td>10/23/20</td>
        <td>Create footer file.</td>
        <td>Finished</td>
        <td>PS</td>
      </tr>
	    <tr>
        <td>V 1.04</td>
        <td>10/23/20</td>
        <td>Create navigation file.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
	    <tr>
        <td>V 1.05</td>
        <td>10/24/20</td>
        <td>Create Admin Options page.</td>
        <td>Finished</td>
        <td>PS</td>
      </tr>
	    <tr>
        <td>V 1.06</td>
        <td>10/24/20</td>
        <td>Incorporate navigation/footer files site wide.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
	    <tr>
        <td>V 1.07</td>
        <td>10/25/20</td>
        <td>Frame contents of Admin Options page.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
	    <tr>
        <td>V 1.10</td>
        <td>09/23/20</td>
        <td>Add list of users to Admin_Options.php</td>
        <td>Finished</td>
        <td>PS</td>
      </tr>
	    <tr>
        <td>V 1.11</td>
        <td>09/23/20</td>
        <td>Update all files to incorporate "best practices".</td>
        <td>Finished</td>
        <td>JS</td>
      </tr>
      <tr>
        <td>V 2.0</td>
        <td>11/19/20</td>
        <td>Insert options to display table.</td>
        <td>Finished</td>
        <td>MS</td>
      </tr>
    </table>
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
