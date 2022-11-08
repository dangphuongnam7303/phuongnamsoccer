<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/dao/hang-hoa.php';


?>
<!DOCTYPE html>
<html>

<head>
    <title>Harvest vase</title>
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    <link rel="stylesheet" href="../../content/css/chi-tiet-ui.css">
</head>

<body>
    <div class="wrapper1">
        <div class="product-img">
            <img width="420px" height="327px" src='<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>' style="max-width: 95%">

        </div>
        <div class="product-info">
            <div class="product-text">
                <h1><?= $ten_hh ?></h1>
                <h2><?= $so_luot_xem?></h2>
                <p><?= $mo_ta ?></p>
            </div>
            <div class="product-price-btn">
                <p><span>$<?= number_format($don_gia, 2) ?></span></p> <br>
                <form action="../trang-chinh/index.php?act=addtocart" method="post">
                    <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                    <input type="hidden" name="ten_hh" value="<?= $ten_hh ?>">
                    <input type="hidden" name="hinh" value="<?= $hinh ?>">
                    <input type="hidden" name="gia" value="<?= $don_gia ?>">
                    <button name="addtocart" type="submit">buy now</button>

                </form>
            </div>
        </div>
    </div>
    <?php require_once 'binh-luan.php'; ?>

    <?php require_once 'hang-cung-loai.php'; ?>
</body>


</html>