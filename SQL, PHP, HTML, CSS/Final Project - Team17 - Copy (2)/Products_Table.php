<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Final Project - Jake Schinasi
V2.0  11/19/20 AT Original
V2.1  12/05/20 Added ability to display only active or inactive (or both) items in the table
File: Products_Table.php
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
    <h1 style="text-align:center;font-family:sans-serif;">Our Products</h1>
    <br><br><br>
    <p>
      <center>
      <?php
        // this connects to site_db and sets $dbc to use with mysql functions
        require "connect_db.php";

        // set $sort_type to passed input from form
        if (isset($_POST['sort'])) {
            $sort_type = $_POST['sort'];
        }
        else {
            $sort_type = "product_id";
        }

        // set $where_clause to display all active rows
        $where_clause = " WHERE active=\"Y\"";

        // set $where_clause to passed input from form
        if (isset($_POST['where_clause'])) {
          $where_clause = $_POST['where_clause'];
        }
        
        $table = "t17_products";

        // query our table
        $q = "SELECT * FROM $table$where_clause ORDER BY $sort_type;";   # We put query in $q    
        $r = mysqli_query ($dbc, $q);   # this runs query, using $dbc

        // start a table and create the header
        echo "<table border = 1 style=\"font-family:sans-serif;\">";
        echo "<tr>";
            echo "<th> Product ID </th>";
            echo "<th> Name </th>";
            echo "<th> Quantity </th>";
            echo "<th> Supplier </th>";
            echo "<th> Price </th>";
            echo "<th> Size </th>";
            echo "<th> Type </th>";
            echo "<th> Active </th>";
            echo "<th>Deactivate</th>";
        echo "</tr>";

        // display each row
        if ($r ) {
            while ($row = mysqli_fetch_array ( $r, MYSQLI_NUM))
            {   echo "<tr>";
                echo "<td> $row[0] </td>";
                echo "<td> $row[1] </td>";
                echo "<td> $row[2] </td>";
                echo "<td> $row[3] </td>";
                echo "<td> $row[4] </td>";
                echo "<td> $row[5] </td>";
                echo "<td> $row[6] </td>";
                echo "<td> $row[7] </td>";
                echo "<td><a href='DeactivateRow.php?id=" . $row[0] . "_products_Products_Table.php'> DEACTIVATE </a></td>";
            }
        }
        else {
            echo "<li>" . mysqli_error($dbc) . "</li>";
        }

        // finish and close the table
        echo "</table>";

        // submit button to re-run this same file
        echo "<form action='Products_Table.php' method='POST'>";
        echo "<br> <input type='submit' value='SORT BY'>";
        echo "<input type='radio' name='sort' value='product_id'> Product ID";
        echo "<input type='radio' name='sort' value='product_name'> Product Name";
        echo "<input type='radio' name='sort' value='product_quantity'> Product Quantity";
        echo "<input type='radio' name='sort' value='product_supplier'> Product Supplier";
        echo "<input type='radio' name='sort' value='product_price'> Product Price";
        echo "<input type='radio' name='sort' value='product_size'> Product Size";
        echo "<input type='radio' name='sort' value='product_type'> Product Type";
        echo "<input type='radio' name='where_clause' value=''> Show All";
        echo "<input type='radio' name='where_clause' value=' WHERE active=\"Y\"'> Show Active";
        echo "<input type='radio' name='where_clause' value=' WHERE active=\"N\"'> Show Inactive";
        echo "</form>";
      ?>
      <br>
      <br>
      <br>
      <a href='Insert_Products_Table.php'> Add Product </a>
      <br>
      </center>
    </p>
  </main>
  <hr>
  <footer>
    <?php
    /********************************************************************
    * Include the code to display the footer, whuch uses FILE_AUTHOR
    *******************************************************************/
      define ("FILE_AUTHOR", array('Jake Schinasi'));
      include "footer.php";
    ?>
  </footer>
</body>
</html>
