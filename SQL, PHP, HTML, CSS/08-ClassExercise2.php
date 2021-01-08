<!DOCTYPE HTML> 
<html lang=“en”> 
<head><meta charset=”UTF-8”> 
	<title> Lab8 - Andrew Tokash  </title> 
</head> 
<body> 

<?php      # First just connect to the database.

	echo "<h1> Andrew Tokash is Testing Connections </h1>"; 
	echo "<ol>";
	echo "<li> Calling 'connect_db.php' to connect to the database! </li>"; 

	require ("connect_db.php");
	
	if( mysqli_ping( $dbc ) )   #  good connection!
		{ echo "<li>Connected! </li>"; 
		echo "<li> MySQL Server " . mysqli_get_server_info( $dbc ). 
		     " connected on "     . mysqli_get_host_info( $dbc )  . 
			 "</li>"; }
	# run a query to show all our tables and dispplay
	echo "<br><li> Trying our first Query! </li>";	
	$q = "SELECT * FROM prints" ;				# We put command in $q
	$r = mysqli_query ($dbc , $q );		# this runs commands,

	if ($r ) {
		echo "<li> Query worked.</li>";
		while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
			echo "<li> Table: " . $row[0] . " " . $row[1] . " " . 
								$row[2] . " " . $row[3];
		}
	}
		else {
			echo "<li>" . mysqli_error ( $dbc ) . "</li>" ;
		}
		echo "</ol>";
		
	echo "<table border=1>";
	echo "<tr>";
	echo "<th> ID </th>";
	echo "<th> Medium </th>";
	echo "<th> Name </th>";
	echo "<th> Artist </th>";
	echo "<th> Price </th>";
	echo "</t>";
	echo "</table>";
	
	$q = "SELECT * FROM prints" ;				# We put command in $q
	$r = mysqli_query ($dbc , $q );
		
?>
		
			 
</body>
</html>
