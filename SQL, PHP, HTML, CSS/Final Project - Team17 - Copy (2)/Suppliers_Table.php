<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Final Project - Peter Schwartz
V2.0  11/19/20 AT Original
V2.1  12/05/20 Added ability to display only active or inactive (or both) items in the table
File: Supplier_Table.php
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
    <h1 style="text-align:center;font-family:sans-serif;">Our Suppliers</h1>
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
              $sort_type = "supplier_id";
          }

          // set $where_clause to display all active rows
          $where_clause = " WHERE active=\"Y\"";

          // set $where_clause to passed input from form
          if (isset($_POST['where_clause'])) {
            $where_clause = $_POST['where_clause'];
          }

          $table = "T17_suppliers";

          $q = "SELECT * FROM $table$where_clause ORDER BY $sort_type;";
          $r = mysqli_query($dbc, $q);

          echo "<table border=1 style=\"font-family:sans-serif;\">";
          echo "<tr>";
          echo "<th>Supplier ID</th>";
          echo "<th>Name</th>";
          echo "<th>Email</th>";
          echo "<th>Phone</th>";
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
              echo "<td><a href='DeactivateRow.php?id=" . $row[0] . "_suppliers_Suppliers_Table.php'> DEACTIVATE </a></td>";
              echo "</tr>";
            }
            echo "</table>";
          }
          else {
            echo "<li>" . mysqli_error($dbc) . "</li>";
          }

          // submit button to re-run this same file
          echo "<form action='Suppliers_Table.php' method='POST'>";
          echo "<br> <input type='submit' value='SORT BY'>";
          echo "<input type='radio' name='sort' value='supplier_id'> Supplier ID";
          echo "<input type='radio' name='sort' value='supplier_name'> Supplier Name";
          echo "<input type='radio' name='where_clause' value=''> Show All";
          echo "<input type='radio' name='where_clause' value=' WHERE active=\"Y\"'> Show Active";
          echo "<input type='radio' name='where_clause' value=' WHERE active=\"N\"'> Show Inactive";
          echo "</form>";
        ?>
        <br>
        <br>
        <br>
        <a href='Insert_Suppliers_Table.php'> Add Supplier </a>
        <br>
      </center>
    </p>
  </main>
  <hr>
  <footer>
    <?php
      define ("FILE_AUTHOR", array('Peter Schwartz'));
      include "footer.php";
    ?>
  </footer>
</body>
</html>
