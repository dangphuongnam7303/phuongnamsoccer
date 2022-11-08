<?php
Require_once '/xampp/htdocs/DAM_FALL2022/dao/pdo.php';
function loai_insert($ten_loai){
    $sql = "INSERT INTO loai(ten_loai) VALUES ('$ten_loai')";
pdo_execute($sql);
}

function loai_update($ma_loai, $ten_loai){
    $sql = "UPDATE loai SET ten_loai='$ten_loai' WHERE ma_loai=$ma_loai";
pdo_execute($sql);

}

function loai_delete($ma_loai){
    
if(is_array($ma_loai)){
    foreach ($ma_loai as $ma) {
    $sql = "DELETE FROM loai WHERE ma_loai=$ma";

        pdo_execute($sql);
    }
}
else{
    $sql = "DELETE FROM loai WHERE ma_loai=$ma_loai";

    pdo_execute($sql);
}

}

function loai_select_all(){
    $sql = "SELECT * FROM loai";
return pdo_query($sql);
}

function loai_select_by_id($ma_loai){
    
    $sql = "SELECT * FROM loai WHERE ma_loai=$ma_loai";
return pdo_query_one($sql);
}

function loai_exist($ma_loai){
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=$ma_loai";
return pdo_query_value($sql) > 0;
}


?>