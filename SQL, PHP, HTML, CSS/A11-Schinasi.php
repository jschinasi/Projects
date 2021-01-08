<?
/****************************************************************************
 * Assignment A11- Products Table
 * 11/3/2020
 ***************************************************************************/
/********************************************************************************
 * Table
 */
// query our table
define ("FILE_AUTHOR", "Jake Schinasi");

    /***********************************************************************
     * Input Validation
     **********************************************************************/
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $product_name = trim($_POST["product_name"]);
        $product_quantity = trim($_POST["product_quantity"]);
        $product_supplier = trim($_POST["product_supplier"]);
        $product_price = trim($_POST["product_price"]);
        $product_size = trim($_POST["product_size"]);
        $product_type = trim($_POST["product_type"]);
        $active = trim($_POST["active"]);
    }
    else { 
        $product_name = $product_quantity = $product_supplier = $product_price = $product_size = $product_type = $active = "";
    }
        // initial $error_message to "" - this means there are no errors
    $error_message= "";
    if ( $_SERVER['REQUEST_METHOD'] == "GET") {
        $error_message = "Fill in the form and hit SUBMIT";
    }
    else if ($product_name == "")   {
        $error_message = "Please enter the name.";
    }
    else if (strlen($product_name)<4)   {
        $error_message = "The name must be at least 4 characters.";
    }

    
    /***********************************************************************
 * Call the function based on value of REQUEST_METHOD
************************************************************************/
    if ( $_SERVER['REQUEST_METHOD'] == "POST" AND $error_message == "") {

        echo "<br> Name was entered: $product_name";
        echo "<br> Quantity was entered: $product_quantity";
        echo "<br> Supplier was entered: $product_supplier";
        echo "<br> Price was entered: $product_price";
        echo "<br> Size was entered: $product_size";
        echo "<br> Type was entered: $product_type";
        echo "<br> Active type was entered: $active";

/**************************************************************************
 * ACTION-HANDLER - This is processes the form  
 **************************************************************************/
// connect to database and insert the data
    require "connect_db.php";

    date_default_timezone_set('America/New_York');
    $q = "INSERT INTO t17_products (product_name, product_quantity, product_supplier, product_price, product_size, product_type, active) " .
    "VALUES ('$product_name', $product_quantity , '$product_supplier','$product_price', '$product_size', '$product_type', '$active');";
    $r = mysqli_query($dbc,$q);
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
    echo "<form action='A11-Schinasi.php' method='POST'>";
    echo "<fieldset>";
    echo "<br> Name         <input type='text' name='product_name'>";
    echo "<br> Quantity     <input type='text' name=product_quantity>";
    echo "<br> Supplier     <input type='text' name='product_supplier'>";
    echo "<br> Price        <input type='text' name='product_price'>";
    echo "<br> Size         <input type='text' name=product_size>";
    echo "<br> Type         <input type='text' name='product_type'>";
    echo "<br> Active       <input type='text' name='active'>";
    echo "<br> <input type='submit'>";
    echo "</fieldset>";
    echo "</form>";

    echo "<br> $error_message";
  }	 
  

 include "footer.php";

    // END of file
?>