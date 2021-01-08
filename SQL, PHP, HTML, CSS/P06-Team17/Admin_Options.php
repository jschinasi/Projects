<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Team 17 Project 6
V1.0  09/19/20 AT Original
V1.1  10/28/2020 AT changed for best practices
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
    <?php
      include "navigation.php";
    ?>
  </header>
  <hr>
  <main>
    <h1 style="text-align:center;font-family:sans-serif;">Admin Options</h1>
    <br><br><br>
    <h2 style="text-align:center;">Project Document</h2>
    <p align="center">
      <iframe src="P04-Team17.pdf" width="600" height="600"></iframe>
    </p>
    <br>
    <h2 style="text-align:center;">PHP Info</h2>
    <p align="center">
      <iframe src="phpinfo.php" width="1000" height="600"></iframe>
    </p>
    <br>
    <h2 style="text-align:center;">Current Users</h2>
    <p>
      <center>
        <?php
          include "connect_db.php";
          $table = "T17_users";

          $q = "SELECT * FROM $table";
          $r = mysqli_query($dbc, $q);

          echo "<table border=1 style=\"font-family:sans-serif;\">";
          echo "<tr>";
          echo "<th>Username</th>";
          echo "<th>Password</th>";
          echo "<th>Hashtype</th>";
          echo "<th>First Name</th>";
          echo "<th>Last Name</th>";
          echo "<th>Email</th>";
          echo "<th>Phone Number</th>";
          echo "<th>User Type</th>";
          echo "<th>Password Last Modified</th>";
          echo "<th>Last Changed</th>";
          echo "<th>Active</th>";
          echo "</tr>";

          if ($r) {
            while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
              echo "<tr>";
              echo "<td>$row[0]</td>";
              echo "<td>$row[1]</td>";
              echo "<td>$row[2]</td>";
              echo "<td>$row[3]</td>";
              echo "<td>$row[4]</td>";
              echo "<td>$row[5]</td>";
              echo "<td>$row[6]</td>";
              echo "<td>$row[7]</td>";
              echo "<td>$row[8]</td>";
              echo "<td>$row[9]</td>";
              echo "<td>$row[10]</td>";
              echo "</tr>";
            }
            echo "</table>";
          }
          else {
            echo "<li>" . mysqli_error($dbc) . "</li>";
          }
        ?>
      </center>
    </p>
  </main>
  <hr>
  <footer>
    <?php
      include "footer.php";
    ?>
  </footer>
</body>
</html>
