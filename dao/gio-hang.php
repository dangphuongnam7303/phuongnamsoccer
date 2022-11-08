<?php
require_once '/xampp/htdocs/DAM_FALL2022/dao/pdo.php';
require '/xampp/htdocs/DAM_FALL2022/global.php';
extract($_REQUEST);


function update_product_cart($quantity, $total, $id)
{
    foreach ($_SESSION['my_cart'] as $key => $cart) { //Duyệt mảng session
        if ($cart[0] == $id) {
            $_SESSION['my_cart'][$key][4] = $quantity;
            $_SESSION['my_cart'][$key][5] = $total;
        }
    }
}
function pay($ma_hh, $ma_kh, $dia_chi, $email,$phone,$so_luong){
    $sql = "INSERT INTO gio_hang (ma_hh, ma_kh,dia_chi,email,so_dien_thoai,so_luong) VALUES ($ma_hh,'$ma_kh','$dia_chi','$email','$phone',$so_luong)";
    pdo_execute($sql);
}
function don_mua_select_all(){
    $sql = "SELECT * FROM gio_hang";
    return pdo_query($sql);
}
function join_gio_hang() {
$sql = "SELECT p.*,c.ten_hh as ten_hh FROM gio_hang p join hang_hoa c on p.ma_hh = c.ma_hh where p.ma_hh =c.ma_hh";
return pdo_query($sql);

}
?>