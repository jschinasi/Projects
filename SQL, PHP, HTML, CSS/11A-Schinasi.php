<? 
/****************************************************************************
 * Module 11a - Display a table with and use a FORM!
 * 11/2/2020
 ***************************************************************************/
echo "<h2> Sample Display Table with SORT button! </h2> <br>";
define ("FILE_AUTHOR", "Jake Schinasi");

/***************************************************************************
 * ACTION - This displays an HTML form
 **************************************************************************/
    // this connects to site_db and sets $dbc to use with mysql functions
    require "connect_db.php";

    // set $sorttype to passed input from form
    if (isset($_POST['sort'])) {
        $sort_type = $_POST['sort'];
    }
    else {
        $sort_type = "id";
    }

    // query our table
    $q = "SELECT * FROM PRINTS";    # We put query in $q
    $r = mysqli_query ($dbc,$q);    # This runs the query using $dbc

    // start a table and create the header
    echo "<table border = 1>";
    echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> Name </th>";
    echo "<th> Artist </th>";
    echo "<th> Price </th>";
        echo "<th> Quality </th>";
        echo "<th> Dimentions </th>";
    echo "</tr>";

    // display each row
    if ($r ) {
        while ($row = mysqli_fetch_array ( $r, MYSQLI_NUM))
        {   echo "<tr> <td> $row[0] </td><td> $row[1] </td><td> " .
                            "$row[2] </td><td> $row[3]</td></tr>" ;

        }
    }
    // finish and close the table
    echo "<table>";

    // display the current time for NY
    date_default_timezone_set('America/New_York');
    echo "<br> The current time is " . date("h:i:s a");

    // submit button to re-run this same file
    echo "<form action='11A-Schinasi.php' method='POST'>";
    echo "<br> <input type='submit' value='SUBMIT'>";
    echo "<input type='radio' name='sort' value='id'>       ID NUM";
    echo "<input type='radio' name='sort' value='name'>     Name";
    echo "<input type='radio' name='sort' value='artist'>   Artist";
    echo "<input type='radio' name='sort' value='price'>    Price";
    echo "</form>";
    /********************************************************************
     * Include the code to display the footer, whuch uses FILE_AUTHOR
     *******************************************************************/
    include "footer.php";

    // END of file
    ?>