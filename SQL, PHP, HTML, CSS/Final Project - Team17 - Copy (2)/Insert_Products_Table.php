<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Final Project - Jake Schinasi
V1.0  11/19/20 AT Original
File: Insert_Products_Table.php
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
          /**************************************************************************
           * Input Validation
           *************************************************************************/
          
          // set variables that were passed from the form
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = trim($_POST["name"]);
            $quantity = trim($_POST["quantity"]);
            $supplier = trim($_POST["supplier"]);
            $price = trim($_POST["price"]);
            $size = trim($_POST["size"]);
            $type = trim($_POST["type"]);
            $active = "Y";
          }
          else {
            $name = $quantity = $supplier = $price = $size = $type = $active = "";
            
          }
          
          // initial $error_message to "" - this means there are no errors
          $error_message = "";
          if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $error_message = "Fill in the form and hit SUBMIT";
          }
          else if ($name == "") {
            $error_message = "Please enter the Product Name";
          }
          else if ($quantity == "") {
            $error_message = "Please enter the Product Quantity";
          }
          else if ($supplier == "") {
            $error_message = "Please enter the Product Supplier";
          }
          else if ($price == "") {
            $error_message = "Please enter the Product Price";
          }
          else if ($size == "") {
            $error_message = "Please enter the Product Size";
          }
          else if ($type == "") {
            $error_message = "Please enter the Product Type";
          }
           
           /**************************************************************************
           * Call the function based on value of REQUEST_METHOD
            *************************************************************************/
          if ($_SERVER['REQUEST_METHOD'] == "POST" AND $error_message == "") {
          
            echo "<br> Product Name was entered: $name";
            echo "<br> Product Quantity was entered: $quantity";
            echo "<br> Product Supplier was entered: $supplier";
            echo "<br> Product Price was entered: $price";
            echo "<br> Product Size was entered: $size";
            echo "<br> Product Type was entered: $type";
          
            // connect to the database and insert the data
            require "connect_db.php";
            date_default_timezone_set('America/New_York');
            $q = "INSERT INTO T17_users (product_name, product_quantity, product_supplier, product_price, product_size, product_type, active) " . 
            "VALUES ('$name','$quantity','$supplier','$price','$size','$type','$active');";
            $r = mysqli_query ($dbc, $q);
          
            // check query return code
            if ($r) {
              echo "<br><br> Data inserted!";
            }
            else {
              echo "<li>" . mysqli_error($dbc) . "</li>";
            }
          }
          else {
            // When SUBMIT is pressed, browser loads the ACTION file
            echo "<form action='Insert_Products_Table.php' method='POST'>";
            echo "<fieldset>";
            echo "<br> Product Name: <input type='text' name='name'>";
            echo "<br> Product Quantity: <input type='number' name='quantity'>";
            echo "<br> Product Supplier: <select name='supplier'>";
            echo "<option value='Nike'> Nike </option>";
            echo "<option value='Adidas'> Adidas </option>";
            echo "<option value='Puma'> Puma </option>";
            echo "<option value='Skechers'> Skechers </option>";
            echo "</select>";
            echo "<br> Product Price: <input type='number' name='price'>";
            echo "<br> Product Size: <input type='number' name='size'>";
            echo "<br> Product Type: <select name='type'>";
            echo "<option value='Men'> Men </option>";
            echo "<option value='Women'> Women </option>";
            echo "<option value='Both'> Both </option>";
            echo "</select>";
            echo "<br> <input type='submit' value='Add Product'>";
            echo "</fieldset>";
            echo "</form>";
          
            //display error messages (if any)
            echo "<br> $error_message";
          }
        ?>
      </center>
    </p>
  </main>
  <hr>
  <footer>
    <?php
      define('FILE_AUTHOR', array('Jake Schinasi'));
      include "footer.php";
    ?>
  </footer>
</body>
</html>