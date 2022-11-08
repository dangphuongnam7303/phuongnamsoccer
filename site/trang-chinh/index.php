<?php
require_once '/xampp/htdocs/DAM_FALL2022/dao/pdo.php';
require_once '/xampp/htdocs/DAM_FALL2022/site/hang-hoa/liet-ke.php';
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
extract($_REQUEST);

if (!isset($_SESSION['my_cart'])) {
    $_SESSION['my_cart'] = [];
}

if (exist_param("gioi-thieu")) {
    $VIEW_NAME = "gioi-thieu.php";
} else if (exist_param("lien-he")) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = trim($_POST['message']);
    $ngay = date('d/m/y');

    function send($name, $email, $msg,$ngay)
    {
        $sql= "INSERT INTO lien_he (name, email, msg, ngay) VALUES ('$name','$email','$msg','$ngay')";
        pdo_execute($sql);
    }
    send($name, $email, $msg,$ngay);
    echo "<script> alert('Thanks for contacting us') </script>";
} else if (exist_param("gop-y")) {
    echo "<script> alert('Thanks for feedback') </script>";
} else if (exist_param("addtocart")) {
    $ma_hh = $_POST['ma_hh'];
    $ten_hh = $_POST['ten_hh'];
    $hinh = $_POST['hinh'];
    $gia = $_POST['gia'];
    $soluong = 1;
    $total = $soluong * $gia;
    if (!empty($_SESSION['my_cart'])) {
        foreach ($_SESSION['my_cart'] as  $cart) {
            if ($ma_hh == $cart[0]) {
                $add = false;
                break;
            } else {
                $add = true;
            }
        }
        if ($add) {
            $spadd = [$ma_hh, $ten_hh, $hinh, $gia, $soluong, $total];
            array_push($_SESSION['my_cart'], $spadd);
            echo '<script>alert("Thêm thành công") </script>';
        } else {
            echo '<script> alert("Sản phẩm đã có trong giỏ hàng, vui lòng kiểm tra lại số lượng") </script>';
        }
    } else {
        $spadd = [$ma_hh, $ten_hh, $hinh, $gia, $soluong, $total];
        array_push($_SESSION['my_cart'], $spadd);
        echo '<script>alert("Thêm thành công") </script>';
    }
} else {
    require_once '/xampp/htdocs/DAM_FALL2022/dao/hang-hoa.php';
    $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "trang-chu.php";
}

require_once '/xampp/htdocs/DAM_FALL2022/site/trang-chinh/layout.php';
