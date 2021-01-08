<?
/**************************************************************************
 *    Lab 14- input validaion  
 **************************************************************************/
 echo "<br> Lab 11 - Jake Schinasi"; 
 define ("FILE_AUTHOR","Jake Schinasi"); 
 echo "<br> The request method is " . $_SERVER['REQUEST_METHOD'];

 /************************************************************************
  *     Input Validation
  ************************************************************************/
// set variables that were passed from the form
if ($ $_SERVER['REQUEST_METHOD'] == "POST") {

$name = trim($_POST["name"]);
$artist = trim($_POST["artist"]);
$price = trim($_POST["price"]);
$version = trim($_POST["version"]);

}

else { 
    $name = $artist = $price = $version = "";
}

// initial $error_message to "" - this means there are no errors
$error_message="";
if ( $_SERVER['REQUEST_METHOD'] == "GET") {
    $error_message = "Fill in the form and hit SUBMIT";
}
else if ($name == "")   {
  $error_message = "Please enter the name."; 
}
else if (strlen($name)<4)   {
  $error_message = "The name must be at least 4 characters.";
}


/***********************************************************************
 * Call the function based on value of REQUEST_METHOD
************************************************************************/
if ($_SERVER['REQUEST_METHOD'] == "POST" AND $error_message == "") {

    // echo "<br> Running our ACTION HANDLER code - Version $version";
   .// echo "<br> Name was entered: $name";
    // echo "<br> Artist was entered: $artist";
    // echo "<br> Price was entered: $price";
    // connect to database and isnert the data
  require "connect_db.php";
  date_default_timezone_set('America/New_York');

  Sq = "SELECT * FROM prints WHERE name='$name' AND artist='$artist';";
  $r = mysqli_query ($dbc, $q);

  if ($r) {
      if (mysqli_num_rows($r) == 1) {
          $error_message = "Entry already exixts";
      }
   }
}
// Call function based on REQUEST_METHOD
if ($_SERVER['REQUEST_METHOD'] == 'POST' AND $error_message == "") {

  $q = "INSERT INTO prints (name, artist, price) " . 
          "VALUES('$name', '$artist', '$price');";
  $r = mysqli_query ($dbc,$q);

    echo "<br> Running our ACTION HANDLER code - Version $version";
    echo "<br> Name was entered: $name";
    echo "<br> Artist was entered: $artist";
    echo "<br> Price was entered: $price";
    
// Check query return code
if ($r ) {
    echo "Data Inserted!";
}   
else {
echo "<li>" . mysqli_error( $dbc ) . "</li>" ;
}

}
/**************************************************************************
 * ACTION - This is displays an HTML form  
 **************************************************************************/
else {  
   
   echo "<br>Running our ACTION code"; 
   // When SUBMIT is pressed, browser loads the ACTION file
   echo "<form action='14L-Schinasi.php' method='POST'>";
   echo "<fieldset>";
   echo "<br> Print Name <input type='text' name='name'>";
   echo "<br> Artist     <input type='text' name='artist'>";
   echo "<br> Price      <select name='price'>";
   echo                  "<option value='0.00'> No Charge </option>'";
   echo                  "<option value='4.99'> $4.99 </option>'";
   echo                  "<option value='9.99'> $9.99 </option>'";
   echo                  "<option value='14. 99'> $14.99 </option>'";
   echo                  "</select>";
   // these are unused by the handler
   echo "<br> Date  <input type='date'  >";
   echo "<br> EMAIL  <input type='email'>";
   echo "<br> Password  <input type='password'>";
   
   echo "<input type='hidden' name='version' value='1.2'>";
   echo "<br> <input type='submit'>";
   echo "</fieldset>";
   echo "</form>";

   echo "<br> $error_message";
 }	 

 include "footer.php";




// End of file 
 ?>