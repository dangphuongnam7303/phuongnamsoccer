
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <style>
        ul{
            list-style: none;
        }
        ul li a{
            text-decoration: none;
            color: black;
        }
        ul li {
            margin-bottom: 15px;
        }
        aside{
            font-size: 25px;
        }
        label{
            margin-right: 20px;
        }
    </style>
</head>
<body>
<ul>
    <li>
        <label for=""><i class="fa-solid fa-house"></i></label>
        <a href="<?= $SITE_URL ?>/trang-chinh?trang_chu">Home</a>
    </li>
    <li>
        <label for=""><i class="fa-solid fa-filter"></i></label>
        <a href="<?= $ADMIN_URL ?>/loai-hang">Categories</a>
    </li>
    <li>
        <label for=""><i class="fa-brands fa-product-hunt"></i></label>
        <a href="<?= $ADMIN_URL ?>/hang-hoa">Products</a>
    </li>
    <li>
        <label for=""><i class="fa-solid fa-user"></i></label>
        <a href="<?= $ADMIN_URL ?>/khach-hang">Customer</a>
    </li>
    <li>
        <label for=""><i class="fa-solid fa-comment"></i></label>
        <a href="<?= $ADMIN_URL ?>/binh-luan">Comment</a>

    </li>
    <li>
        <label for=""><i class="fa-solid fa-star"></i></label>
        <a href="<?= $ADMIN_URL ?>/thong-ke">Chart</a>
    </li>
    <li>
        <label for=""><i class="fa-solid fa-cart-shopping"></i></label>
        <a href="<?= $ADMIN_URL ?>/cart">Cart</a>
    </li>
    <li>
        <label for=""><i class="fa-solid fa-phone"></i></label>
        <a href="<?= $ADMIN_URL ?>/lien-he">Contacts</a>
    </li>
</ul>
</body>
</html>


