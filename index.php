<?php
$current_page = 'index';
include('inc/header.php');
?>
<!--success or error message-->
//create a session variable to Display Message
 // $_SESSION['add'] = "SUCCESS! Please Check Your Email";
 //redirect page to home
 //header("location:".SITEURL.'index.php');
    <!--Begin Hero Section-->
      <section class="hero">
          <div class="center">
        <h1>Brand New Stock</h1>
        <p class="sub-title">Fresh, Iconic And Exclusive Styles For Everyone</p>
        <a href="products.php">
          <button class="cta">SHOP NOW</button>
        </a>
    </div>
      </section><!--End Hero Section-->

      <!--Begin Product Section-->
      <section class="products">
        <div class="clothing">
          <h2>CLOTHING</h2>
          <a href="clothing.php">
            <button class="cta">SHOP NOW</button>
          </a>
        </div>
        <div class="equipment">
          <h2>EQUIPMENT</h2>
          <a href="equipment.php">
            <button class="cta">SHOP NOW</button>
          </a>
        </div>
        <div class="accessories">
          <h2>ACCESSORIES</h2>
          <a href="accessories.php">
            <button class="cta">SHOP NOW</button>
          </a>
        </div>
      </section><!--End Product Section-->

      <!--Begin Offer Section-->
      <section class="offer">
        <h1>SUMMER SALE</h1>
        <p>UP TO 20% OFF</p> 
        <p class="code">CODE: ALLSUMMER01</p>
      </section> <!--End Offer Section-->
      <section class="about">

    <!--Begin About Section-->
        <div class="info">
          <h2>ABOUT US - UK’s fastest growing sporting goods online retailer.</h2>
          <p class="about-center">
            Founded in 2021, All Sports Online is one of the UK’s fastest growing sporting goods online retailer. <br>Whether you are looing for clothing, equipment or accessories, All Sports Online has all the best products from all of the top brands.
          </p>
        </div>
      </section>  <!--End About Section-->

      <?php
include('inc/footer.php');
?>



