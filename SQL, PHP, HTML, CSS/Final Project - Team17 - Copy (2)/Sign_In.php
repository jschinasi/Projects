<?php
    session_start();
    include "navigation.php";
?>
<!DOCTYPE html>
<!---------------------------------------------------------------------- 
    Team 17 Final Project
    File: Sign_In.php
    V1.0 09/18/20 AT Original
    V1.11 10/28/20 AT changed for best practices
----------------------------------------------------------------------->
<!-- HTML Header -->
<html lang="en">
<head>
  <link href="CSS/css_styles.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Steezy</title>
  <style>
    :root {

            --form_bg: #ffffff;
            --input_bg: #E5E5E5;
            --input_hover:#eaeaea;
            --submit_hover: #40e263;
    }

    * {
            padding: 0;
            margin: 0;
    }

    #form_wrapper {
      width: 1000px;
      height: 700px;
      margin:auto;
      border-radius: 50px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 5vw;
      padding: 5vh 15px;
      box-sizing: border-box;
    }

    #form_left {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #form_left img {
        width: 350px;
        height: 350px;
    }

    #form_right {
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 20px;
        padding: 10% 5%;
    }

    .input_container {
        background-color: var(--input_bg);
        display: flex;
        align-items: center;
        padding-left: 20px;
    }

    .input_container:hover {
        background-color: var(--input_hover);
    }

    .input_container,
    #input_submit {
        height: 60px;
        border-radius: 30px;
        width: 100%;
    }

    .input_field {
        color: var(--icon_color);
        background-color: inherit;
        width: 90%;
        border: none;
        font-size: 1.3rem;
        font-weight: 400;
        padding-left: 30px;
    }

    .input_field:hover,
    .input_field:focus {
        outline: none;
    }

    #input_submit {
        background-color: black;
        padding-left: 0;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
    }

    #input_submit:hover {
        background-color: rgb(184,135,92);
        transition: background-color,1s;
        cursor: pointer;
    }

    h1, span {
        text-align: center;
    }

    /* shift it a bit lower */
    #create_account {
        display: block;
        position: relative;
        top: 30px;
    }

    a {
        /* remove default underline */
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: rgb(184,135,92);
    }

    @media screen and (max-width:768px) {
    /* make the layout  a single column and add some margin to the wrapper */
    #form_wrapper {
        grid-template-columns: 1fr;
        margin-left: 10px;
        margin-right: 10px;
    }
    }
  </style>
</head>
<!-- Body of the Webpage -->
<body>
  <header>
  </header>
  <hr>
  <main>
    <div id="form_wrapper">
            <div id="form_left">
                <img src="images/logos/1.png">
            </div>
            <?php
             /**************************************************************************
             * Call the function based on value of REQUEST_METHOD
             **************************************************************************/
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                action_handler();
            }
            else {
                action();
            }
            
            /**************************************************************************
             * ACTION - This is displays an HTML form  
            **************************************************************************/
            function action()
            {
            echo '<div id="form_right">';
                echo '<h1 style="color:rgb(184,135,92);">Member Login</h1>';
                echo "<form action='Sign_In.php' method='POST'>";
                echo '<div class="input_container">';
                    echo '<input placeholder="Username" type="text" name="Username" id="field_email" class="input_field">';
                echo '</div>';
                echo "<br>";
                echo '<div class="input_container">';
                    echo '<input  placeholder="Password" type="password" name="Password" id="field_password" class="input_field">';
                echo '</div>';
                echo "<br>";
                echo '<input type="submit" value="Login" id="input_submit" class="input_field">';
                echo "</form>";
                echo '<span id="create_account">';
                    echo '<a href="Insert_Users_Table.php">Create your account</a>';
                echo '</span>';
            echo '</div>';
            }

            /**************************************************************************
             * ACTION-HANDLER - This is processes the form  
            **************************************************************************/
            function action_handler() 
            { 
            // set variables that were passed from the form
            $username = $_POST["Username"];
            $pass = $_POST["Password"];

            // connect to the database and insert the data
            require "connect_db.php";
            $q = "SELECT * FROM T17_users WHERE username='$username' AND BINARY pass='$pass'";
            $r = mysqli_query ($dbc, $q);

            // If the query ran and we retrieved ONE record, get the password in table
            if ($r) {
                // If we have a match, there will be one row retrieved
                if (mysqli_num_rows($r) == 1) {
                    echo "<br><h2>You've successfully logged in!<br>";
                    echo "<a href='Admin_Options.php'>Continue ></a></h2><br>";
                    $_SESSION["login_status"] = "Logged In";
                }
                else {
                    echo "<br> The username and password are not valid.";
                }
            }
            else {
                echo "Error with SQL Query";
            }

            echo "<br><a href='Sign_In.php'>Return to previous page</a><br>";
            }
            ?>
        </div>
  </main>
  <hr>
  <footer>
    <?php
      define('FILE_AUTHOR', array('Mehul Shetty','Jake Schinasi','Peter Schwartz'));
      include "footer.php";
    ?>
  </footer>
</body>
</html>
