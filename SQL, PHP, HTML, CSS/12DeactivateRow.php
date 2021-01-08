<?php
/**************************************************************************
 *    12 - "Deactiviates" one row in the Prints tbale 
 *          This will set the ACTIVE column to "N" 
 *  
 *    11/09/2020   AT   Original Program    
  **************************************************************************/
 echo "<br> This is File " . trim($_SERVER['SCRIPT_NAME'],"/") . 
                         "- 'deactivates' a row in the Prints table! <br>";  
 define("FILE_AUTHOR","Andrew Tokash");
 
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
   

/*  commented out  
   $q = ""; 
   $r = mysqli_query ($dbc,$q);
   
   // Check query return code  
   if ($r ) {
	   echo "Data inserted!"; 
   }  	   
   else {     
       echo "<li>" . mysqli_error( $dbc ) . "</li>" ;
   }
 
  

// End of file 
 ?>