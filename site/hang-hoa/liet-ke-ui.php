<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../content/css/liet-ke-ui.css">
    <style>
        form button {
            outline: 0;
            background-color: white;
            border: 0;
            border-radius: 3px;
            width: 10px;
            font-size: 18px;
            
        }
    </style>
    <script src="https://kit.fontawesome.com/1ef4c26d86.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <?php
        foreach ($items as $item) {
            extract($item);
        ?>
            <div class="product-card" style="margin-bottom:50px">


                <div class="product-tumb">
                    <a href="<?= $SITE_URL ?>/hang-hoa/chi-tiet.php?ma_hh=<?= $ma_hh ?>">
                        <img width="200px" height="150px" src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>">
                    </a>
                </div>
                <div class="product-details">
                    <span class="product-catagory"><?= $ten_hh ?></span>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>$<?= number_format($don_gia, 2) ?></small>$<?= number_format($don_gia - $giam_gia, 2) ?></div>
                        <div class="product-links">
                            <form action="index.php?act=addtocart" method="post" style="width:95px;margin-top: 0px;padding-top: 0px;">
                                <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                                <input type="hidden" name="ten_hh" value="<?= $ten_hh ?>">
                                <input type="hidden" name="hinh" value="<?= $hinh ?>">
                                <input type="hidden" name="gia" value="<?= $don_gia ?>">

                                <button name="addtocart"  style="width:115px;padding-top: 0px;padding-left: 80px;" type="submit"><i class="fa-solid fa-cart-shopping" style="font-size: 25px;color:black"></i></button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>