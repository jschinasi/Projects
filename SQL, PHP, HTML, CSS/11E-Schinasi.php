<?
/**************************************************************************
 *    Class exrcise 11 - creating and using forms - PRINTS table  
 **************************************************************************/
 echo "<br> Class Exercise 11 - Jake Schinasi"; 
 define ("FILE_AUTHOR","Jake Schinasi"); 
 echo "<br> The request method is " . $_SERVER['REQUEST_METHOD'];

 // connect to database and isnert the data
require "connect_db.php";
$q = "INSERT INTO prints (name, artist, price) " . " VALUES('$name', '$artist', $price);";
$r = mysqli_query($dbc,$q);

// Check query return code
if ($r ) {
  echo "Data Inserted!";
}
else {
  echo "<li>" . mysqli_error( $dbc ) . "</li>" ;
}
/***********************************************************************
 * Call the function based on value of REQUEST_METHOD
************************************************************************/
if ( $_SERVER['REQUEST_METHOD'] == "POST") {
  action_handler();
}
else {
  action();
}
/**************************************************************************
 * ACTION - This is displays an HTML form  
 **************************************************************************/
 function action()
 {
  
   
   echo "<br>Running our ACTION code"; 
   // When SUBMIT is pressed, browser loads the ACTION file
   echo "<form action='11E-Schinasi.php' method='POST'>";
   echo "<br> Print Name <input type='text' name='name'>";
   echo "<br> Artist     <input type='text' name='artist'>";
   echo "<br> Price      <input type='text' name='price'>";
   echo "<input type='hidden' name='version' value='1.2'>";
   echo "<br> <input type='submit'>";
   echo "</form>";
 }	 

/**************************************************************************
 * ACTION-HANDLER - This is processes the form  
 **************************************************************************/
 function action_handler() 
 { 	 
   // set variables that were passed fron the form
   $name = $_POST["name"];
   $artist = $_POST["artist"];
   $price = $_POST["price"];
   $version= $_POST["version"];

   echo "<br>Running our ACTION HANDLER code - Version $version"; 
   echo "<br> Name was entered: $name";
   echo "<br> Artist was entered: $artist";
   echo "<br> Price was entered: $price";
 }  

 

// End of file 
 ?>