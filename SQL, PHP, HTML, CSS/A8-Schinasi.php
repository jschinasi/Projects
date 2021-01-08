<!DOCTYPE html>
<!-- 10/20/2020 AT This is Assignment 08 -->

<!-- HTML Header -->
<html lang="en">
<head>
<title> Assignment 08 </title>
<meta charset="utf-8">

<style>
table,  td  {  margin-right:auto;       margin-left: auto; 
border:2px solid black;  border-collapse:collapse;
 			     padding: 18px; text-align: left;}
             th  {  margin-right:auto; margin-left: auto; 
			     border:2px solid black;  border-collapse:collapse;
                 padding: 18px; text-align: left;	
			     background-color: blue; color:white;}
 
</style>
</head> 
<!-- Body ----->
<body>
<header> Admin Options </header>
<main>
<h2> Admin options </h2> 
<table>
	<tr>
		<th> Options  </th>
		<th> Description<th>
	</tr>
<!-- Output Rows using php ----->
<?php
	echo "<tr> <td> Design Document	 <td> Description </td> </tr>";
	echo "<tr> <td> MySQL  <td> Query status of MySQL Connection </td> </tr>";
	echo "<tr> <td> Users  <td> Display all Users </td> </tr>";
?>
</table>
</main>

<!-- Footer using php file -->
<?php include "08-footer.php"; ?>

</body>
</html> 