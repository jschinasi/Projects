<?php     
/******************************************************************************
 ** Filename: L09-Schinasi.php
 *  V1.0 10/27/2020 AT Original
 *  V1.1 10/28/2020 AT Formatted for best practices
 * 
 ******************************************************************************/
# First just connect to the database.

	echo "<h1> Lab 9 - Jake Schinasi </h1>"; 
	echo "<ol>";
	echo "<li> Calling 'connect_db.php' to connect to the database! </li>"; 

	require ("connect_db.php");
	
	if( mysqli_ping( $dbc ) )   #  good connection!
		{ echo "<li>Connected! </li>"; 
		echo "<li> MySQL Server " . mysqli_get_server_info( $dbc ). 
		     " connected on "     . mysqli_get_host_info( $dbc )  . 
             "</li>"; }
// explain_table - displays all the columns and info for one table
$q = "SHOW TABLES;";
$r = mysqli_query($dbc, $q);

function explain_table($dbc, $this_table)
{
    echo "<br> Table is $this_table";

    echo "<br> Columns: ";
    $q = "EXPLAIN $this_table;" ;
    $r = mysqli_query ($dbc,$q);

    if ($r ) {
        while ($row = mysqli_fetch_array( $r, MYSQLI_NUM))
        { echo " $row[0]";
        }
    }
    echo "<br>";
}

if ($r) {
    while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
        explain_table($dbc,$row[0]);
    }
}

else {
    echo "<li>" .  mysqli_error($dbc) .  "</li>";
}

// End OF FILE
?>
