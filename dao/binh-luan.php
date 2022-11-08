<?php
require_once "/xampp/htdocs/DAM_FALL2022/dao/pdo.php";

function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES ('$ma_kh', '$ma_hh', '$noi_dung', '$ngay_bl')";
    pdo_execute($sql);
}
    
function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
    $sql = "UPDATE binh_luan SET ma_kh='$ma_kh',ma_hh='$ma_hh',noi_dung='$noi_dung',ngay_bl='$ngay_bl' WHERE ma_bl=$ma_bl";
    pdo_execute($sql);
}
    
function binh_luan_delete($ma_bl){
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
    $sql = "DELETE FROM binh_luan WHERE ma_bl=$ma";

            pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM binh_luan WHERE ma_bl=$ma_bl";

        pdo_execute($sql);
    }
}
   
function binh_luan_select_all(){
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}
   
function binh_luan_select_by_id($ma_bl){
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=$ma_bl";
    return pdo_query_one($sql);
}
   
function binh_luan_exist($ma_bl){
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=$ma_bl";
    return pdo_query_value($sql) > 0;
}
    
function binh_luan_select_by_hang_hoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=$ma_hh ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}
    


?>