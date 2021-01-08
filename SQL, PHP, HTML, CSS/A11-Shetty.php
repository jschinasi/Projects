<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Assignment 11 - Mehul Shetty
V1.0  11/11/20 AT Original
File: A11-Shetty.php
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
    <h1 style="text-align:center;font-family:sans-serif;">User Table</h1>
    <br><br><br>
    <p>
      <center>
        <?php
          /**************************************************************************
           * Input Validation
           *************************************************************************/
          
          // set variables that were passed from the form
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = trim($_POST["username"]);
            $pass = trim($_POST["pass"]);
            $hashtype = "none";
            $first_name = trim($_POST["first_name"]);
            $last_name = trim($_POST["last_name"]);
            $email_address = trim($_POST["email_address"]);
            $user_type = trim($_POST["user_type"]);
            $active = "Y";
          }
          else {
            $username = $pass = $hashtype = $first_name = $last_name = $email_address = $user_type = $active = "";
          }
          
          // initial $error_message to "" - this means there are no errors
          $error_message = "";
          if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $error_message = "Fill in the form and hit SUBMIT";
          }
          else if ($username == "") {
            $error_message = "Please enter the username";
          }
          else if (strlen($username) < 4) {
            $error_message = "The username must be at least 4 characters";
          }
          else if ($pass == "") {
            $error_message = "Please enter the password";
          }
          else if (strlen($pass) < 4) {
            $error_message = "The password must be at least 4 characters";
          }
          else if ($first_name == "") {
            $error_message = "Please enter the first name";
          }
          else if ($last_name == "") {
            $error_message = "Please enter the last name";
          }
          else if ($email_address == "") {
            $error_message = "Please enter the email address";
          }
          else if (strlen($email_address) < 4) {
            $error_message = "The email address must be at least 4 characters";
          }
          else if ($user_type == "") {
            $error_message = "Please enter the user type";
          }
           
           /**************************************************************************
           * Call the function based on value of REQUEST_METHOD
            *************************************************************************/
          if ($_SERVER['REQUEST_METHOD'] == "POST" AND $error_message == "") {
          
            echo "<br> Username was entered: $username";
            echo "<br> Password was entered: $pass";
            echo "<br> First Name was entered: $first_name";
            echo "<br> Last Name was entered: $last_name";
            echo "<br> Email Address was entered: $email_address";
            echo "<br> User Type was entered: $user_type";
          
            // connect to the database and insert the data
            require "connect_db.php";
            date_default_timezone_set('America/New_York');
            $q = "INSERT INTO T17_users (username, pass, hashtype, first_name, last_name, email_address, user_type, password_last_modified, active) " . 
            "VALUES ('$username','$pass','$hashtype','$first_name','$last_name','$email_address','$user_type','" . date('Y-m-d H-i-s') . "','$active');";
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
            echo "<form action='A11-Shetty.php' method='POST'>";
            echo "<fieldset>";
            echo "<br> Username: <input type='text' name='username'>";
            echo "<br> Password: <input type='password' name='pass'>";
            echo "<br> First Name: <input type='text' name='first_name'>";
            echo "<br> Last Name: <input type='text' name='last_name'>";
            echo "<br> Email: <input type='email' name='email_address'>";
            echo "<br> User Type: <select name='user_type'>";
            echo "<option value='Admin'> Admin </option>";
            echo "<option value='Employee'> Employee </option>";
            echo "<option value='Customer'> Customer </option>";
            echo "</select>";
            echo "<br> <input type='submit' value='Insert Row'>";
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
      include "footer.php";
    ?>
  </footer>
</body>
</html>