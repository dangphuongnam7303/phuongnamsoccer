<?php
require '/xampp/htdocs/DAM_FALL2022/global.php';
require '/xampp/htdocs/DAM_FALL2022/dao/hang-hoa.php';
//-------------------------------//

extract($_REQUEST);

if(exist_param("ma_loai")){
    $items = hang_hoa_select_by_loai($ma_loai);
}
else if(exist_param("dac_biet")){
    $items = hang_hoa_select_dac_biet();
}
else if(exist_param("keywords")){
    $items = hang_hoa_select_keyword($keywords);
}
else{
    $items = hang_hoa_select_all();
}

$VIEW_NAME = "../hang-hoa/liet-ke-ui.php";
require_once '/xampp/htdocs/DAM_FALL2022/site/trang-chinh/layout.php';
