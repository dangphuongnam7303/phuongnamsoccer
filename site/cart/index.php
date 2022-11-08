<?php
// require_once "/xampp/htdocs/DAM_FALL2022/global.php";
require_once "/xampp/htdocs/DAM_FALL2022/dao/gio-hang.php";
extract($_REQUEST);
if(isset($_GET["act"])){
    if($_GET["act"]=="check-out"){
    $VIEW_NAME = "check-out.php";
    
}else if($_GET["act"]=="delcart"){
    array_splice($_SESSION['my_cart'], $_GET['id_del_cart'], 1);
    $VIEW_NAME ="gio-hang.php";
    

} else if($_GET["act"]=="pay") {
// check_login();
foreach($_SESSION['my_cart'] as $pay) {
    $ma_hh = $pay[0];
    $ma_kh = $_SESSION['user']['ma_kh'];
    $dia_chi = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $so_luong = $pay[4];
    pay($ma_hh, $ma_kh, $dia_chi, $email,$phone,$so_luong);
    unset($_SESSION['my_cart']);
    // header("location: ".$SITE_URL.'/trang-chinh/index.php');
    echo "<script>alert('Payment Success');
    window.location.href='../trang-chinh/index.php';
    </script>;
    ";

}
} else{
    $VIEW_NAME="gio-hang.php";
    if ($_GET["act"] == "select") {
        $VIEW_NAME = "gio-hang.php";
        $quantity = $_GET["quantity"];
        $id = $_GET["product_id"];
        if ($_GET["choose"] == 1) {
            $quantity += 1;
        }
        if ($_GET["choose"] == 0) {
    
            if ($quantity > 1) {
                $quantity -= 1;
            } 
        }
        
        update_product_cart($quantity, $quantity*$_GET["price"] , $id);
    }
}
}else{
    $VIEW_NAME = "gio-hang.php";
}


require_once $VIEW_NAME ;
