<?php 
echo "<b><br> Exercise 9 –Jake Schinasi </b><br>";  

echo "<br> Step 1: ";

$body_temp=98.6;
echo $body_temp; 

echo "<br> Step 2: ";

if ( $body_temp=100) {
    echo "Match";
 }
echo "<br> Step 3: Concatenation:";

$fname="Andrew";
$lname="Tokash";
echo "<br> - ". $fname . " " . $lname; 
echo "<br> - $fname $lname in double quotes"; 
echo '<br> - $fname $lname in single quotes'; 
echo "<br> - my name is Jake";

echo "<br> Step 4: Arrays:";

$months[]= 'January'; 
$months[]= 'February';
$months[]= 'March';
echo "<br> 0 - $months[0]";
echo "<br> 1 - $months[1]";
echo "<br> 2 - $months[2]";

echo "<br> Step 5: Arrays:"; 

$months['jan']= 'January'; 
$months['feb']= 'February';
$months['mar']= 'March';
echo "<br> - " . $months['feb'];

echo "<br> Step 6: SQL Array";
//  connect_db connects to site_db; $dbv is used in MYSQLI functions
require "connect_db.php";
$table= "PRINTS";

$q = "INSERT INTO $table VALUES (1,'sunflowers','Van Gough', 99.99);";
$r = mysqli_query ($dbc, $q);

$q = "INSERT INTO $table VALUES (2,'Water Lilies','Monet', 8.88);";
$r = mysqli_query ($dbc, $q);

$q = "EXPLAIN $table ;";
$r = mysqli_query ($dbc, $q);

$q = "SELECT * FROM $table;";             # We put query in $q    
$r = mysqli_query ($dbc, $q);   # this runs query, using $dbc

echo "<table border=1>";
echo"<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Artist</th>";
echo "<th>Price</th>";
echo "</tr>";

// loop through each row of returned data
if ($r ) {
    echo "<br> Explaining table: $table";
    while ($row = mysqli_fetch_array ( $r, MYSQLI_NUM)) {
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "</tr>";
    }
        echo"</table>";
}

else {
    echo "<li>"  .  mysqli_error($dbc)  .  "</li>";
}
                   
?> 
