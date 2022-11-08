<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/1ef4c26d86.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        header {
    justify-content: space-between;
    display: flex;
}



.header-name a {
    text-decoration: none;
    font-family: 'Lato';
    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 43px;
    /* identical to box height */

    display: flex;
    align-items: center;
    text-align: center;

    /* heading */

    color: #1D1D1D;

    border-radius: 3px;
}
.cart i {
    font-size: 40px;
    color: black;
}
.header-cart {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;

}

.cart {
    width: 50px;
    height: 50px;
    margin-left: 15px;
}

        .header-cart {
            position: relative;
        }

        .count {

            position: absolute;
            top: 0;
            right: 0;
            padding-top: 5px;
            text-align: center;
            width: 25px;
            height: 25px;
            font-size: 15px;
            font-weight: bold;
            color: white;
            background-color: red;
            border-radius: 50%;
        }

        .header-menu {
            justify-content: center;
        }
        .sign i{
            font-size: 40px;
            color: black;
        }
    </style>
</head>

<body>
<header>
            <div class="header-name">
                <a href="<?= $SITE_URL ?>/trang-chinh/index.php"><img width="72" height="72" src="../../content/images/users/DPN-100.jpg" alt="">Phuong Nam SPORT </a>
            </div>
            <div class="header-menu">
                <?php require_once '../layout/menu.php'; ?>
            </div>
            <div class="header-cart">
                <div class="sign">
                    <button id="snip" style="display:none" onclick="toggle()"></button>
                    <label for="snip"><i class="fa-solid fa-user"></i></label>
                </div>
                <div class="cart">
                    <a href="<?= $SITE_URL ?>/cart/index.php"><i class="fa-solid fa-cart-shopping">

                        </i>
                        <div class="count">
                            <?php
                            if (isset($_SESSION['my_cart'])) {
                                echo count($_SESSION['my_cart']);
                            } else {
                                echo 0;
                            }
                            ?>
                        </div>
                    </a>
                </div>
            </div>
        </header>
</body>

</html>