<?php
require_once "/xampp/htdocs/DAM_FALL2022/global.php";
require_once "/xampp/htdocs/DAM_FALL2022/dao/hang-hoa.php";
//--------------------------------//
require_once "/xampp/htdocs/DAM_FALL2022/dao/loai.php";

check_login();

extract($_REQUEST);

if(exist_param("btn_insert")){
    $up_hinh = save_file("hinh", "$IMAGE_DIR/products/");
    $hinh = strlen("$up_hinh") > 0 ? $up_hinh : 'product.png';
    try {
        hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        unset($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "../hang-hoa/new.php";
}
else if(exist_param("btn_update")){
    $up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/");
    $hinh = strlen("$up_hinh") > 0 ? $up_hinh : $hinh;
    try {
        hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        echo $exc->getMessage();
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "../hang-hoa/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        hang_hoa_delete($ma_hh);
        $items = hang_hoa_select_page();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "../hang-hoa/list.php";
}
else if(exist_param("btn_edit")){
    $item = hang_hoa_select_by_id($ma_hh);
    extract($item);
    $VIEW_NAME = "../hang-hoa/edit.php";
}
else if(exist_param("btn_list")){
    $items = hang_hoa_select_page();
    $VIEW_NAME = "../hang-hoa/list.php";
}
else{
    $VIEW_NAME = "../hang-hoa/new.php";
}

if($VIEW_NAME == "../hang-hoa/new.php" || $VIEW_NAME == "../hang-hoa/edit.php"){
    $loai_select_list = loai_select_all();
}

require_once "/xampp/htdocs/DAM_FALL2022/admin/trang-chinh/layout.php";

