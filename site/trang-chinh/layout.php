<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/dao/pdo.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/1ef4c26d86.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">

    <script src="<?= $CONTENT_URL ?>/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet/less" type="text/css" href="../../content/css/signin_adm.less">
    <!-- <script src="https://cdn.jsdelivr.net/npm/less"></script> -->
    <script src="../../content/css/signin_adm.less" type="text/javascript"></script>
    <script src="less.js"></script>
    <script src="../../content/js/index.js"></script>
    <link rel="stylesheet" href="../../content/css/index.css">

    <style>
        article {
            width: 80%;
            float: left;

        }

        aside {
            width: 20%;
            float: right;
        }

        main {
            margin-top: 50px;

            display: flex;
        }

        body {
            width: 1440px;
            margin: 0 auto;
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

        .sign i {
            font-size: 40px;
            color: black;
        }
        .box{
            position: relative;
            max-width: 1440px;
        }
    </style>
</head>

<body>

        <div class="layout" id="layout">
            <header>
                <div class="header-name">
                    <a href="<?= $SITE_URL ?>/trang-chinh/index.php"><img width="72" height="72" src="../../content/images/users/DPN-100.jpg" alt=""> tên hãng SPORT </a>
                </div>
                <div class="header-menu">
                    <?php require_once '../layout/menu.php'; ?>
                </div>
                <div class="header-cart">
                    <div class="sign">
                        <button id="snip" style="display:none" onclick="toggle()"></button>
                        <label style="margin:0px;padding:0px" for="snip"><i class="fa-solid fa-user"></i></label>
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

            <nav>
                <div class="nav-slide" style="margin-top: 20px;">

                    <iframe src="../../slide.php" frameborder="0"></iframe>
                </div>
            </nav>
            <main>

                <article>

                    <div class="product">
                        <?php require_once $VIEW_NAME; ?>
                    </div>
                    <div class="support">
                        <div class="title">
                            <div class="title1">
                                <i class="fa-sharp fa-solid fa-truck-fast"></i>
                                <div class="title2">
                                    <p id="bold">FREE SHIP</p>
                                    <p class="title3">Enjoy free shipping on all orders above $100</p>
                                </div>
                            </div>

                            <div class="title1">
                                <i class="fa-solid fa-phone"></i>
                                <div class="title2">
                                    <p id="bold">SUPPORT 24/7</p>
                                    <p class="title3">Our support team is there to help you for queries</p>
                                </div>
                            </div>


                            <div class="title1">
                                <i class="fa-solid fa-rotate-left"></i>
                                <div class="title2">
                                    <p id="bold">30DAYS RETURN</p>
                                    <p class="title3">Simply return it within 30 days for an exchange.</p>
                                </div>
                            </div>


                            <div class="title1">
                                <i class="fa-solid fa-fingerprint"></i>
                                <div class="title2">
                                    <p id="bold">100% PAYMENT SECURE</p>
                                    <p class="title3">Our payments are secured with 256 bit encryption</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="ex">
                        <div class="box">
                            <h2>PEACE OF MINE</h2>
                            <p>A one-stop platform for all your fashion needs, hassle-free. Buy with a peace of mind.</p>

                        </div>
                        <div class="box">
                            <h2>BUY 2 GET 1 FREE</h2>
                            <p>End of season sale. Buy any 2 items of your choice and get 1 free.</p>
                        </div>

                    </div>

                </article>
                <aside>
                    <!--LOGIN-->

                    <!--CATALOG-->
                    <?php require_once '/xampp/htdocs/DAM_FALL2022/site/layout/loai-hang.php'; ?>
                    <!--FAVORITE-->
                    <?php require_once '/xampp/htdocs/DAM_FALL2022/site/layout/top10.php'; ?>
                </aside>
            </main>


            <footer>
                <div class="ft-title">
                    <h2>PhuongNam Shop</h2>
                    <table>

                        <tr>
                            <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>

                            <td>Thượng Hòa Hồng Thái Kiến Xương Thái Bình</td>

                        </tr>

                        <tr>
                            <td><i class="fa-solid fa-phone"></i></td>
                            <td>0355 262 101</td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-envelope"></i></td>
                            <td>Phuongnam7303@gmai.com</td>
                        </tr>
                    </table>
                </div>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.3114555371903!2d106.46419265038277!3d20.45239711251258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135f9bd180fe903%3A0xa6397502b0677fd4!2zSOG7k25nIFRow6FpLCBLaeG6v24gWMawxqFuZywgVGjDoWkgQsOsbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1663351702730!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="ft-contact">
                    <table>
                        <h2>Follow us</h2>
                        <tbody>

                            <tr>
                                <td>
                                    <i class="fa-regular fa-envelope"></i>
                                </td>
                                <td>
                                    <a class="a-contact" href="mailto:phuongnam7303@gmail.com">email</a> 
                                    
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <i class="fa-brands fa-facebook"></i>

                                </td>
                                <td>
                                    <a class="a-contact" href="https://www.facebook.com/DangPhuongNam733">Facebook</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <i class="fa-brands fa-instagram"></i>
                                </td>
                                <td>
                                    <a class="a-contact" href="https://www.instagram.com/phuongnam_0703/">Instagram</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </footer>
        </div>


        <div class="wrapper" id="wrapper">
            <div class="form_main">
                <!-- <h1>Admin</h1> -->

                <!-- <form class="form" action="#" method="post">
                <input id="email_admin" name="email_admin" type="text" placeholder="Email">
                <input id="password_admin" type="password" name="password_admin" placeholder="Password">
                <button type="submit" id="login-button">Login</button>
            </form> -->
                <?php require_once '/xampp/htdocs/DAM_FALL2022/site/layout/dang-nhap.php'; ?>
            </div>

            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <a href="#" id="close-btn" onclick="toggle()"><i style="font-size: 50px;margin-left:25px;" class="fa-solid fa-xmark"></i></a>
            </ul>

        </div>

</body>

</html>