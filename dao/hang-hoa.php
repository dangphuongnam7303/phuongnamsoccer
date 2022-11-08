<?php
require_once '/xampp/htdocs/DAM_FALL2022/dao/pdo.php';
function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES ( '$ten_hh', $don_gia, $giam_gia, '$hinh', '$ma_loai', $dac_biet, $so_luot_xem, '$ngay_nhap', '$mo_ta')";
    pdo_execute($sql);
}
    
function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
    $sql = "UPDATE hang_hoa SET ten_hh='$ten_hh', don_gia=$don_gia, giam_gia=$giam_gia, hinh='$hinh', ma_loai=$ma_loai, dac_biet=$dac_biet, so_luot_xem= $so_luot_xem, ngay_nhap='$ngay_nhap', mo_ta='$mo_ta' WHERE ma_hh=$ma_hh";
    pdo_execute($sql);
}
    
function hang_hoa_delete($ma_hh){
    if(is_array($ma_hh)){
        
        foreach ($ma_hh as $ma) {
            
    $sql = "DELETE FROM hang_hoa WHERE  ma_hh=$ma";
    // var_dump($sql);
    //     die;

    pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM hang_hoa WHERE  ma_hh=$ma_hh";
        pdo_execute($sql);
    }
}
    
function hang_hoa_select_all(){
    $sql = "SELECT * FROM hang_hoa";
    return pdo_query($sql);
}
    
function hang_hoa_select_by_id($ma_hh){
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=$ma_hh";
    return pdo_query_one($sql);
}
    
function hang_hoa_exist($ma_hh){
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=$ma_hh";
    return pdo_query_value($sql) > 0;
}
    
function hang_hoa_tang_so_luot_xem($ma_hh){
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=$ma_hh";
    pdo_execute($sql);
}
    
function hang_hoa_select_top10(){
    $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}
    
function hang_hoa_select_dac_biet(){
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}
    
function hang_hoa_select_by_loai($ma_loai){
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=$ma_loai";
    return pdo_query($sql);
}
   
function hang_hoa_select_keyword($keyword){
    $sql = "SELECT * FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}
    
function hang_hoa_select_page(){
    if(!isset($_SESSION['page_no'])){
        $_SESSION['page_no'] = 0;
    }
    if(!isset($_SESSION['page_count'])){
        $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
        $_SESSION['page_count'] = ceil($row_count/10.0);
    }
    if(exist_param("page_no")){
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if($_SESSION['page_no'] < 0){
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if($_SESSION['page_no'] >= $_SESSION['page_count']){
        $_SESSION['page_no'] = 0;
    }
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
    return pdo_query($sql);
}
