<?php
echo "Class Exercise 10 - Jake Schinasi";
echo "<br> Step 1 - Testing a function";
echo "<br> Month 7 has " . days_per_month("7") . " days.";  


// Function to return the number of days per month 
function days_per_month($month)
{ // start in element 1 - 1= JAN, 2=FEB, etc  
  $days_in_month = array(0, 31, 28, 31, 30, 31, 30, 
                        31, 31, 30, 31, 30, 31);
return $days_in_month[$month];
}	
echo "<br> Month 7 has " . days_per_month("7") . " days.";  

echo "<br><br> Step 2 - Define constants";
define("BODY_TEMP",98.6);
define("FILE_AUTHOR", "Jake Schinasi"); 
echo "<br> The standard body temp is " . BODY_TEMP;

echo "<br><br> Step 3 - String Functions ";
$my_name="Jake Schinasi";
echo "<ul><li>strlen  " . strlen($my_name);
echo "<li>str_word_count " . str_word_count($my_name);
echo "<li> strrev " . strrev($my_name);
echo "<li> strtoupper " . strtoupper("hello world");
echo "<li> strpos(haystack,needle) e in Hello is " . strpos("Hello","e"); 

echo "<li> trim(string,char) - removes leading/trailing chars)"; echo "</ul>";

echo "<br><br> Step 4 - Loop with the FOR Command "; 
for ($x = 1; $x < 13; $x++){   
    echo "<br> Month $x has " . days_per_month($x) . "days"; } 	   


// Function to return the number of days per month 
// function days_per_month($month)

echo "<br><br> Step 5a - breaks out of loop";
echo "<br>";
for ($x = 0; $x < 10; $x++) { 
    if ($x == 4) {break;} 
    echo $x . " "; 
}
echo "<br><br> Step 5b - continue at 4th iteration  ";
echo "<br>";
for ($x = 0; $x < 10; $x++) {
	if ($x == 4) {continue;}
	echo $x . " "; 
}
echo "<br><br> Step 6 - Arrays and strings";
 $months = array("Jan", "Feb", "Mar", "Apr"); 
 $months_string = implode(",",$months);
  echo "<br> " . $months_string; 

 $colleges = "Marist,Mount ST Marys,Bard,Vassar";
 echo "<BR> $colleges";
 $colleges_array = explode(",",$colleges);
 echo "<br> " . $colleges_array[0];
 echo "<br> " . $colleges_array[1];
?> 