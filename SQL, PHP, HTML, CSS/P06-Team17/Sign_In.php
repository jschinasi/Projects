<!DOCTYPE html>
<!---------------------------------------------------------------------- 
    Team 17 Project 6
    File: Sign_In.php
    V1.0 09/18/20 AT Original
    V1.1 10/28/20 AT changed for best practices
------------------------------------------------------------------------>
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
    <?php
      include "navigation.php";
    ?>
  </header>
  <hr>
  <main>
    <div id="form_wrapper">
            <div id="form_left">
                <img src="images/logos/1.png">
            </div>
            <div id="form_right">
                <h1 style="color:rgb(184,135,92);">Member Login</h1>
                <div class="input_container">
                    <input placeholder="Email" type="email" name="Email" id="field_email" class='input_field'>
                </div>
                <div class="input_container">
                    <input  placeholder="Password" type="password" name="Password" id="field_password" class='input_field'>
                </div>
                <input type="submit" value="Login" id='input_submit' class='input_field'>
                <span>Forgot <a href="" style="color:rgb(184,135,92)"> Username / Password ?</a></span>
                <span id='create_account'>
                    <a href="">Create your account</a>
                </span>
            </div>
        </div>
  </main>
  <hr>
  <footer>
    <?php
      include "footer.php";
    ?>
  </footer>
</body>
</html>
