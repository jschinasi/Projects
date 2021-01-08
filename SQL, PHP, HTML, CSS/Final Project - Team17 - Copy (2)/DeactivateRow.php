<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------------------------------- 
Team 17 - Final Project
V2.0 11/19/20 AT Original
File: DeactivateRow.php
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
    <br><br><br>
    <p>
      <center>
      <?php
         /**************************************************************************
          * Trap errors - and display error message if we get one!
         **************************************************************************/
         set_error_handler("handleError");

         function handleError($errno, $errstr,$error_file,$error_line) {
               echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
               echo "<br />";
               echo "Terminating PHP Script";
               die();
            }


         /**************************************************************************
          *  First display the prints table 
         **************************************************************************/
         // Connect to the database and insert the data 
            require "connect_db.php";
            
            $display_message = "";

            if (isset($_GET["id"])) {
               $deactivate_row_info = explode('_',$_GET["id"]);
               $id = $deactivate_row_info[0];
               $table_name = $deactivate_row_info[1];
               $previous_filename = $deactivate_row_info[2] . "_" . $deactivate_row_info[3];
            }
            else {
               $display_message = "No Username Specified!";
            }


            $q ="UPDATE T17_" . $table_name .
                  "SET active='N'
                  WHERE " . $table_name ."_id=$id";
            $r=mysqli_query ($dbc,$q);


            // Check query return code
            if ($r ) {
               echo ucfirst($table_name) . " has been Deactivated!";
               echo "<br><br>";
               echo "<form action='$previous_filename'>";
                  echo "<input type='submit' value='Go Back'/>";
               echo "</form>";
            
               echo "</p>";
            }
            else {
               echo "<li>" . mysqli_error( $dbc ) . "</li>";
            }
      ?>
      </center>
    </p>
  </main>
  <hr>
  <footer>
    <?php
      define("FILE_AUTHOR",array("Mehul Shetty"));
      include "footer.php";
    ?>
  </footer>
</body>
</html>

