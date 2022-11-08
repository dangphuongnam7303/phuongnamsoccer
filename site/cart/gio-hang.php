<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/dao/gio-hang.php';
$total = 0;
$i = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/1ef4c26d86.js" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../content/css/gio-hang.css">
</head>

<body>
  

  <div class="container">
  <?php
  require_once '/xampp/htdocs/DAM_FALL2022/site/trang-chinh/header.php';
  ?>
     <?php foreach ($_SESSION['my_cart'] as $cart) { ?>
    
      <section id="cart">
        <article class="product">
          <header> <a class="remove" href="./index.php?act=delcart&id_del_cart=<?= $i ?>"> <img src="<?= $CONTENT_URL ?>/images/products/<?= $cart[2] ?>" alt="">
              <h3>Remove product</h3>
            </a>
          </header>
          <div class="content">
            <h1><?= $cart[1] ?></h1> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque. <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
            <div style="top: 43px" class="type small">XXL</div>
          </div>
          <footer class="content">
            <form action="./index.php" method="get">
              <input type="hidden" id="act" name="act" value="select">
              <input type="text" name="product_id" id="product_id" hidden value="<?= $cart[0] ?>">
              <!-- <span class="qt-minus"> -->
                <button name="choose" class="qt-minus"  value="0" type="submit">-</button>
              <!-- </span> -->
              <input type="hidden" id="price"  name="price" value="<?=$cart[3]?>">
              <!-- <span class="qt"> -->
                <input type="number" class="qt" readonly name="quantity" id="quantity" value="<?= $cart[4]?>">
              <!-- </span> -->


              <!-- <span class="qt-plus"> -->
                <button name="choose" class="qt-plus" value="1"  type="submit">+</button>

              <!-- </span> -->

            </form>
            
            <h2 class="full-price"> <?= $cart[5] ?>$ </h2>
            <h2 class="price"> <?= $cart[3] ?>$ </h2>
          </footer>
        </article>
      <?php
                            $i += 1;
                            $total += $cart[5];
                          }

                      
      ?>
  </div>
  <footer id="site-footer">
    <div class="container clearfix">

      <div class="left">
        <h2 class="subtotal">Subtotal: <span><?= $total ?></span>$</h2>
        <h3 class="tax">VAT (8%): <span><?php 
       $vat= $total>10 ? 8*$total/100 :0;
       echo $vat;
       ?>
      </span>$</h3>
        <h3 class="shipping">Shipping: <span>
          <?php
          if(count($_SESSION['my_cart'])>0) {
            if($total > 100) {
              $ship = 0;
              echo 'Free shipping';
            }else{
              $ship = 5;
  
              echo '5$';
            }
          }else{
            echo '0$';
            $ship = 0;
          }
          
          ?>
        </span></h3>
      </div>

      <div class="right">
        <h1 class="total">Total: <span><?=$total+$vat+$ship?></span>$</h1>
        <form action="index.php?check-out" method="get">
          <input type="hidden" name="act" id="act" value="check-out">
          <input type="hidden" name="total" id="total" value="<?=$total+$vat+$ship?>">
        <button type="submit" class="btn">Check out</button>

        </form>
      </div>

    </div>
  </footer>
  <!-- <script src="../../content/js/gio-hang.js"></script> -->

</body>

</html>