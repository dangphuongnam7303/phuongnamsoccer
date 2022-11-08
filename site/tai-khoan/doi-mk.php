<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/dao/khach-hang.php';
check_login();

extract($_REQUEST);

if(exist_param("btn_change")){
    if($mat_khau2 != $mat_khau3){
        $MESSAGE = "Xác nhận mật khẩu mới không đúng!";
    }
    else{
        $user = khach_hang_select_by_id($ma_kh);
        if($user){
            if($user['mat_khau'] == $mat_khau){
                try {
                    khach_hang_change_password($ma_kh, $mat_khau2);
                    $MESSAGE = "Đổi mật khẩu thành công!";
                } 
                catch (Exception $exc) {
                    $MESSAGE = "Đổi mật khẩu thất bại !";
                }
            }
            else{
                $MESSAGE = "Sai mật khẩu!";
            }
        }
        else{
            $MESSAGE = "Sai mã đăng nhập!";
        }        
    }
}


$VIEW_NAME="../tai-khoan/doi-mk-form.php";
require_once '/xampp/htdocs/DAM_FALL2022/site/trang-chinh/layout.php';

