<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../content/css/lien-he.css">
    <style>
        .container {
            width: 1440px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        require_once '/xampp/htdocs/DAM_FALL2022/site/trang-chinh/header.php';

        ?>
        <section id="contact">

            <h1 class="section-header">Contact</h1>

            <div class="contact-wrapper">

                <!-- Left contact page -->

                <form id="contact-form" class="form-horizontal" role="form" method="post" action="index.php?lien-he">

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="<?= isset($_SESSION['user'])?$_SESSION['user']['ho_ten']:''?>" required>
                            <span class="focus-border">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="<?= isset($_SESSION['user'])?$_SESSION['user']['email']:''?>" required>
                            <span class="focus-border">
                        </div>
                    </div>

                    <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required>
                        
                    </textarea>
                    <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                        <div class="alt-send-button">
                            <i style="margin-top:7px" class="fa fa-paper-plane"></i><span style="padding-top:5px" class="send-text">SEND</span>
                        </div>

                    </button>

                </form>

                <!-- Left contact page -->

                <div class="direct-contact-container">

                    <ul class="contact-list">
                        <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Nam Tu Liem, Ha Noi</span></i></li>

                        <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:0355262101" title="Give me a call">0355 262 101</a></span></i></li>

                        <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:phuongnam7303@gmail.com" title="Send me an email">phuongnam7303@gmail.com</a></span></i></li>

                    </ul>

                    <hr>
                    <ul class="social-media-list">
                        <li><a  href="https://github.com/dangphuongnam7303" target="_blank" class="contact-icon">
                                <i style="font-size: 25px; padding-top:18px" class="fa fa-github" ></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/DangPhuongNam733" target="_blank" class="contact-icon">
                                <i style="font-size: 25px; padding-top:18px" class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" target="_blank" class="contact-icon">
                                <i style="font-size: 25px; padding-top:18px" class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/phuongnam_0703/" target="_blank" class="contact-icon">
                                <i style="font-size: 25px; padding-top:18px" class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    <hr>

                    <div class="copyright">&copy; PHUONG NAM SPORT</div>

                </div>

            </div>

        </section>
    </div>
    

</body>

</html>