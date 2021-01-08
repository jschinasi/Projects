<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Final Project - Peter Schwartz
V2.0  11/19/20 AT Original
File: Insert_Supplier_Table.php
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
          /**************************************************************************
           * Input Validation
           *************************************************************************/
          
          // set variables that were passed from the form
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $phone = trim($_POST["phone"]);
            $active = "Y";
          }
          else {
            $name = $email = $phone = $active = "";
          }
          
          // initial $error_message to "" - this means there are no errors
          $error_message = "";
          if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $error_message = "Fill in the form and hit SUBMIT";
          }
          else if ($name == "") {
            $error_message = "Please enter the Name";
          }
          else if ($email == "") {
            $error_message = "Please enter the Email";
          }
          else if (strlen($email) < 4) {
            $error_message = "The email address must be at least 4 characters";
          }
          else if ($phone == "") {
            $error_message = "Please enter the Phone Number";
          }
           
           /**************************************************************************
           * Call the function based on value of REQUEST_METHOD
            *************************************************************************/
          if ($_SERVER['REQUEST_METHOD'] == "POST" AND $error_message == "") {
          
            echo "<br> Name was entered: $name";
            echo "<br> Email was entered: $email";
            echo "<br> Phone Number was entered: $phone";
          
            // connect to the database and insert the data
            require "connect_db.php";
            date_default_timezone_set('America/New_York');
            $q = "INSERT INTO T17_users (supplier_name, supplier_email, supplier_phone, active) " . 
            "VALUES ('$name','$email','$phone','$active');";
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
            echo "<form action='Insert_Supplier_Table.php' method='POST'>";
            echo "<fieldset>";
            echo "<br> Supplier Name: <input type='text' name='name'>";
            echo "<br> Supplier Email: <input type='email' name='email'>";
            echo "<br> Supplier Phone Number: <input type='number' name='phone'>";
            echo "<br> <input type='submit' value='Add Supplier'>";
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
      define('FILE_AUTHOR', array('Peter Schwartz'));
      include "footer.php";
    ?>
  </footer>
</body>
</html>