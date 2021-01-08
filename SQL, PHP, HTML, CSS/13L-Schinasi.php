<!DOCTYPE html>
<?php
/****************************************************************************
 * Lab 13 Jake Schinasi - Display a table with and use a FORM!
 * 11/25/2020
 ***************************************************************************/
echo "<h2> Jake Schinasi Lab 13! </h2> <br>";
define ("FILE_AUTHOR", "Jake Schinasi");

/**********************************************************************
 * Add CSS styles
 *********************************************************************/
echo"<style>";
echo "table {background-color: darkseagreen;  color:black";
echo "border-collapse: collapse; border: 1px;";   
echo "font-family: arial; font-weight: normal;";
echo "margin-right: auto; margin-left: auto;";
echo "th, td {padding: 5px;}";
echo "</style>"; 



/***************************************************************************
 * ACTION - This displays an HTML form
 **************************************************************************/
   

    // set $sorttype to passed input from form
    if (isset($_POST['sort'])) {
        $sort_type = $_POST['sort'];
        $where_clause = 'WHERE ACCESS="Y"';
    }
    else {
        $sort_type = "id";
    }

    

    // start a table and create the header
    echo "<table border = 1>";
    echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> Name </th>";
    echo "<th> Artist </th>";
    echo "<th> Price </th>";
        echo "<th> Quality </th>";
        echo "<th> Dimentions </th>";
    echo "<th> Discount </th>";
    echo "</tr>";

    // display each row
    if ($r ) {
        // this connects to site_db and sets $dbc to use with mysql functions
       require "connect_db.php";
       while ($row = mysqli_fetch_array ( $r, MYSQLI_NUM))
       {   echo "<tr> <td> $row[0] </td><td> $row[1] </td><td> " .
                    "$row[2] </td><td> $row[3]</td></tr>"  .       
                    "$row[4] </td><td> $row[5]</td></tr>" ;
       
       // query our table
   $q = "SELECT * FROM PRINTS";    # We put query in $q
   $r = mysqli_query ($dbc,$q);    # This runs the query using $dbc

       }
   }
    // finish and close the table
    echo "<table>";

    // display the current time for NY
    date_default_timezone_set('America/New_York');
    echo "<br> The current time is " . date("h:i:s a");

    // submit button to re-run this same file
    echo "<form action='13L-Schinasi.php' method='POST'>";
    echo "<br> <input type='submit' value='SUBMIT'>";
    echo "<input type='radio' name='sort' value='id'>       ID NUM";
    echo "<input type='radio' name='sort' value='name'>     Name";
    echo "<input type='radio' name='sort' value='artist'>   Artist";
    echo "<input type='radio' name='sort' value='price'>    Price";
    echo "</form>";
    
    // Use a form for a hypertext link
    echo "<form action='13L-Schinasi.php' method ='POST'>";
    echo "<br> <input type ='submit' value='ADD NEW PRINT'>";
    echo "<input type='radio' name='where_clause' value='SELECT *'>  Show all";
    echo "<input type='radio' name='where_clause' value='WHERE active='Y'> Show Active";
    echo "<input type='radio' name='where_clasue' value='WHERE active='N'> Show Inactive";
    echo "</form>";
    // Number_format
    // echo "number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," ) : string";    
    
    /********************************************************************
     * Include the code to display the footer, whuch uses FILE_AUTHOR
     *******************************************************************/
    include "footer.php";



    // END of file
    ?>