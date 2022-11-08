<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/dao/khach-hang.php';

extract($_REQUEST);

if(exist_param("btn_register")){
    if($mat_khau != $mat_khau2){
        $MESSAGE = "Xác nhận mật khẩu không đúng!";
    }
    else if(khach_hang_exist($ma_kh)){
        $MESSAGE = "Mã này đã được sử dụng!";
    }
    else{
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name?$file_name:"user.png";
        try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } 
        catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
}
else{
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}

$VIEW_NAME="../tai-khoan/dang-ky-form.php";
require_once '/xampp/htdocs/DAM_FALL2022/site/trang-chinh/layout.php';
