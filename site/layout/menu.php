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
    <style>
        ul {
            list-style: none;
            display: flex;
            margin-top: 20px;

        }

        li {
            margin-right: 20px;
        }

        ul li a {
            text-decoration: none;
            font-family: 'Arimo';
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 14px;
            text-align: center;
            letter-spacing: 0.05em;
            text-transform: uppercase;

            color: #000000;

        }
    </style>
</head>

<body>
    <ul>

        <li>
            <a href="<?= $SITE_URL ?>/trang-chinh?trang-chu">HOME</a>
        </li>
        <li>
            <a href="<?= $SITE_URL ?>/trang-chinh/gioi-thieu.php">Giới thiệu</a>

        </li>
        <li>
            <a href="<?= $SITE_URL ?>/trang-chinh/lien-he.php">CONTACT</a>

        </li>
        <li>
            <a href="<?= $SITE_URL ?>/trang-chinh/gop-y.php">Góp ý</a>

        </li>
       
    </ul>
</body>

</html>