<?php
/*******************************************************************
** Filename: navigation.php
**
** V1.0 10/28/20 AT Original 
*******************************************************************/
session_start();
    echo "<div class=\"container\">";
    echo "<a href=\"Team17.php\"><img src=\"images/logos/3.png\" alt=\"logo\" class=\"logo\" height=\"50px\"></a>";
    echo "<nav>";
    echo "<ul>";
    echo "<li><a href=\"Men.php\">Men</a></li>";
    echo "<li><a href=\"Women.php\">Women</a></li>";
    echo "<li><a href=\"About.php\">About</a></li>";
    echo "<li><a href=\"Contact.php\">Contact</a></li>";
    if (isset($_SESSION["login_status"])) {
        echo "<li><a href=\"Logout.php\">Logout</a></li>";
    }
    else {
        echo "<li><a href=\"Sign_In.php\">Sign In</a></li>";
    }
    echo "</ul>";
    echo "</nav>";
    echo "</div>";

// END OF FILE