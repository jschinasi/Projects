<?php
  include "navigation.php";
?>
<!DOCTYPE html>
<!-------------------------------------------------------------
    Team 17 Final Project
    V1.0  09/11/20 AT Original
    V1.1  09/11/20 Added New ARRIVALS
    V1.2  09/13/20 Added Nike, Adidas, Skechers, and Puma products
    V1.3  09/21/20 Add "Spring Collection" to homepage
    V1.11 10/28/20 AT change for best practices
    V2.0  11/19/20 Replace all data with contents from SQL Tables
-------------------------------------------------------------->
<!-- HTML Header -->
<html lang="en">
<head>
  <link href="CSS/css_styles.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Steezy</title>
</head>
<!-- Body of the Webpage -->
<body>
  <header>
  </header>
  <hr>
  <main>
    <div class="hmpg_1">
      <img src="images/homepage/Get The Perfect Sneakers For Your Next Adventure.png" alt="hmpg_1" class="hmpg_1">
    </div>
    <br>
    <br>
    <br>
    <div>
      <h1 style="text-align:center;">CHECK OUT</h1>
      <br>
      <center>
        <br><a href="Users_Table.php" style="font-size:28px;">Our Users</a><br>
        <a href="Products_Table.php" style="font-size:28px;">Our Products</a><br>
        <a href="Suppliers_Table.php" style="font-size:28px;">Our Suppliers</a><br>
        <br>
        <br>
      </center>
    </div>
    <div class="hmpg_1">
      <h1>LATEST ARRIVALS</h1>
    </div>
    <div id="items_and_containers" class="item_container">
      <ul id="items_and_container">
        <li>
          <div class="box">
            <p class="brand">Nike</p>
            <img src="images/Nike/jordan-zoom-92-mens-shoe.jpg" class="sneak_img">
            <div class="details">
              <p>Jordan Zoom '92</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Skechers</p>
            <img src="images/Skechers/Skechers SC - Sinfist.jpg" class="sneak_img">
            <div class="details">
              <p>SC - Sinfist</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Adidas</p>
            <img src="images/Adidas/Superstar_Shoes_White.jpg" class="sneak_img">
            <div class="details">
              <p>Superstar Shoes</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Puma</p>
            <img src="images/Puma/Suede-Classic+-Sneakers.jpg" class="sneak_img">
            <div class="details">
              <p>Suede Classic+ - Sneakers</p>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div class="hmpg_1">
      <img src="images/homepage/Nike.png" class="hmpg_1">
    </div>
    <div id="items_and_containers" class="item_container">
      <ul id="items_and_container">
        <li>
          <div class="box">
            <p class="brand">Nike</p>
            <img src="images/Nike/air-jordan-1-low-se-mens-shoe.jpg" class="sneak_img">
            <div class="details">
              <p>Air Jordan 1 Low SE</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Nike</p>
            <img src="images/Nike/air-jordan-1-low-shoe.jpg" class="sneak_img">
            <div class="details">
              <p>Air Jordan 1 Low</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Nike</p>
            <img src="images/Nike/air-jordan-1-mid-se-mens-shoe.jpg" class="sneak_img">
            <div class="details">
              <p>Air Jordan 1 Mid SE</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Nike</p>
            <img src="images/Nike/air-jordan-1-mid-shoe.jpg" class="sneak_img">
            <div class="details">
              <p>Air Jordan 1 Mid</p>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div class="hmpg_1">
      <img src="images/homepage/Adidas.png" class="hmpg_1">
    </div>
    <div id="items_and_containers" class="item_container">
      <ul id="items_and_container">
        <li>
          <div class="box">
            <p class="brand">Adidas</p>
            <img src="images/Adidas/Continental_80_Vegan_Shoes_White.jpg" class="sneak_img">
            <div class="details">
              <p>Continental 80 Vegan</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Adidas</p>
            <img src="images/Adidas/Eric_Emanuel_Rivalry_RM_Shoes_Beige.jpg" class="sneak_img">
            <div class="details">
              <p>Eric Emmanuel Rivalry RM</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Adidas</p>
            <img src="images/Adidas/Rivalry_Low_Shoes_White.jpg" class="sneak_img">
            <div class="details">
              <p>Rivalry Low</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Adidas</p>
            <img src="images/Adidas/Stan_Smith_Shoes_White.jpg" class="sneak_img">
            <div class="details">
              <p>Stan Smith Shoes</p>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div class="hmpg_1">
      <img src="images/homepage/summer_collection.png" class="hmpg_1">
    </div>

    <br>
    <br>
    <br>

    <div class="hmpg_1">
      <img src="images/homepage/Skechers.png" class="hmpg_1">
    </div>
    <div id="items_and_containers" class="item_container">
      <ul id="items_and_container">
        <li>
          <div class="box">
            <p class="brand">Skechers</p>
            <img src="images/Skechers/Relaxed Fit- Ralden - Walson.jpg" class="sneak_img">
            <div class="details">
              <p>Relaxed Fit: Ralden - Wanson</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Skechers</p>
            <img src="images/Skechers/Relaxed Fit- Romango - Elmen.jpg" class="sneak_img">
            <div class="details">
              <p>Relaxed Fit: Romango - Elmen</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Skechers</p>
            <img src="images/Skechers/Relaxed Fit- Romango - Elmen 2.jpg" class="sneak_img">
            <div class="details">
              <p>Relaxed Fit: Romango - Elmen</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Skechers</p>
            <img src="images/Skechers/Skechers SC - Bronly.jpg" class="sneak_img">
            <div class="details">
              <p>SC - Bronly</p>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div class="hmpg_1">
      <img src="images/homepage/Puma.png" class="hmpg_1">
    </div>
    <div id="items_and_containers" class="item_container">
      <ul id="items_and_container">
        <li>
          <div class="box">
            <p class="brand">Puma</p>
            <img src="images/Puma/Calibrate-Runner-Men's-Shoes.jpg" class="sneak_img">
            <div class="details">
              <p>Calibrate Runner</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Puma</p>
            <img src="images/Puma/Calibrate-Runner-Men's-Shoes2.jpg" class="sneak_img">
            <div class="details">
              <p>Calibrate Runner</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Puma</p>
            <img src="images/Puma/Future-Rider-Olympique-de-Marseille-Sneakers.jpg" class="sneak_img">
            <div class="details">
              <p>Future Rider Olympique-de-Marseille Sneakers</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="brand">Puma</p>
            <img src="images/Puma/RS-Fast-Sneakers.jpg" class="sneak_img">
            <div class="details">
              <p>RS Fast Sneakers</p>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div class="hmpg_1">
      <img src="images/homepage/discover_new_heights.png" class="hmpg_1">
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
