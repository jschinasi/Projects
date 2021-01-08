<?
/****************************************************************************
 * Assignment A10- Products Table
 * 11/3/2020
 ***************************************************************************/
echo "<h2> Products Table </h2> <br>";
define ("FILE_AUTHOR", "Jake Schinasi");


    // this connects to site_db and sets $dbc to use with mysql functions
    require "connect_db.php";
    $table = "t17_products";

    // query our table
    $q = "SELECT * FROM $table;";             # We put query in $q    
    $r = mysqli_query ($dbc, $q);   # this runs query, using $dbc
    
    // start a table and create the header
    echo "<table border = 1>";
    echo "<tr>";
        echo "<th> Product ID </th>";
        echo "<th> Name </th>";
        echo "<th> Quantity </th>";
        echo "<th> Supplier </th>";
        echo "<th> Price </th>";
        echo "<th> Size </th>";
        echo "<th> Type </th>";
        echo "<th> Active </th>";
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
        }
    }
    else {
        echo "<li>" . mysqli_error($dbc) . "</li>";
    }
    
    // finish and close the table
    echo "</table>";

    /********************************************************************
     * Include the code to display the footer, whuch uses FILE_AUTHOR
     *******************************************************************/
    include "footer.php";

    // END of file