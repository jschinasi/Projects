<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Final Project - Mehul Shetty
V2.0  11/19/20 AT Original
V2.1  12/05/20 Added ability to display only active or inactive (or both) items in the table
File: User_Table.php
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
    <h1 style="text-align:center;font-family:sans-serif;">Our Users</h1>
    <br><br><br>
    <p>
      <center>
        <?php
          include "connect_db.php";
          // set $sort_type to passed input from form
          if (isset($_POST['sort'])) {
            $sort_type = $_POST['sort'];
          }
          else {
              $sort_type = "user_id";
          }

          // set $where_clause to display all active rows
          $where_clause = " WHERE active=\"Y\"";

          // set $where_clause to passed input from form
          if (isset($_POST['where_clause'])) {
            $where_clause = $_POST['where_clause'];
          }

          $table = "T17_users";

          $q = "SELECT * FROM $table$where_clause ORDER BY $sort_type;";
          $r = mysqli_query($dbc, $q);

          echo "<table border=1 style=\"font-family:sans-serif;\">";
          echo "<tr>";
          echo "<th>User ID</th>";
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
          echo "<th>Deactivate</th>";
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
              echo "<td>$row[11]</td>";
              echo "<td><a href='DeactivateRow.php?id=" . $row[0] . "_users_Users_Table.php'> DEACTIVATE </a></td>";
              echo "</tr>";
            }
            echo "</table>";
          }
          else {
            echo "<li>" . mysqli_error($dbc) . "</li>";
          }

          // submit button to re-run this same file
          echo "<form action='Users_Table.php' method='POST'>";
          echo "<br> <input type='submit' value='SORT BY'>";
          echo "<input type='radio' name='sort' value='user_id'> User ID";
          echo "<input type='radio' name='sort' value='username'> Username";
          echo "<input type='radio' name='sort' value='first_name'> First Name";
          echo "<input type='radio' name='sort' value='last_name'> Last Name";
          echo "<input type='radio' name='sort' value='user_type'> User Type";
          echo "<input type='radio' name='where_clause' value=''> Show All";
          echo "<input type='radio' name='where_clause' value=' WHERE active=\"Y\"'> Show Active";
          echo "<input type='radio' name='where_clause' value=' WHERE active=\"N\"'> Show Inactive";
          echo "</form>";
        ?>
        <br>
        <br>
        <br>
        <a href='Insert_Users_Table.php'> Add User </a>
        <br>
      </center>
    </p>
  </main>
  <hr>
  <footer>
    <?php
      define ("FILE_AUTHOR", array('Mehul Shetty'));
      include "footer.php";
    ?>
  </footer>
</body>
</html>
