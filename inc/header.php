<!DOCTYPE html>
<?php include('config/constants.php');?>
include('config/constants.php');
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/form.css" />
    <title><?php echo $title ?></title>
  </head>
  <body>
<!--End Header-->
    <header>
      <a class="<?php echo $current_page == 'index' ? 'active' : '' ?>" href="index.php"><img src="images/logo.png" alt="" class="logo" /></a>
      <nav>
        <ul class="menu">
          <li>
            <a class="<?php echo $current_page == 'products' ? 'active' : '' ?>" href="products.php">SHOP ALL PRODUCTS</a>
          </li>
          <li>
            <a class="<?php echo $current_page == 'clothing' ? 'active' : '' ?>" href="clothing.php">CLOTHING</a>
          </li>
          <li>
            <a class="<?php echo $current_page == 'equipment' ? 'active' : '' ?>" href="equipment.php">EQUIPMENT</a>
          </li>
          <li>
            <a class="<?php echo $current_page == 'accessories' ? 'active' : '' ?>" href="accessories.php">ACCESSORIES</a>
          </li>
        </ul>
      </nav>
      <div class="icons">
        <a href="login.php">
      <img class="cart" src="images/my-account.png" alt="" >
    </a>
    <a href="login.php">
      <img class="cart" src="images/cart.png" alt="" >
    </a>
    </div>
    </header>  <!--End Header-->