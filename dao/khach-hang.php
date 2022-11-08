<?php
require_once "/xampp/htdocs/DAM_FALL2022/dao/pdo.php";

function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
    $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro) VALUES ( '$ma_kh', '$mat_khau', '$ho_ten', '$email', '$hinh', $kich_hoat, $vai_tro)";
    pdo_execute($sql);
}
    
function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){

    $sql = "UPDATE khach_hang SET mat_khau='$mat_khau',ho_ten='$ho_ten',email='$email',hinh='$hinh',kich_hoat=$kich_hoat,vai_tro=$vai_tro WHERE ma_kh='$ma_kh'";
    pdo_execute($sql);

}
function khach_hang_delete($ma_kh){
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
    $sql = "DELETE FROM khach_hang  WHERE ma_kh='$ma'";

            pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM khach_hang  WHERE ma_kh='$ma_kh'";

        pdo_execute($sql);
    }
}
    
    
function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}
    
function khach_hang_select_by_id($ma_kh){

    $sql = "SELECT * FROM khach_hang WHERE ma_kh='$ma_kh'";
    return pdo_query_one($sql);
}
    
function khach_hang_exist($ma_kh){
    $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh='$ma_kh'";
    return pdo_query_value($sql) > 0;
}
    
function khach_hang_select_by_role($vai_tro){
    $sql = "SELECT * FROM khach_hang WHERE vai_tro=$vai_tro";
    return pdo_query($sql);
}
    
function khach_hang_change_password($ma_kh, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET mat_khau=$mat_khau_moi WHERE ma_kh='$ma_kh'";
    pdo_execute($sql);
}
   


?>