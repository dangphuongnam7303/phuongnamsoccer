<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";
//--------------------------------//

check_login();


if(exist_param("chart")){
    $VIEW_NAME = "../thong-ke/chart.php";
}
else{
    $VIEW_NAME = "../thong-ke/list.php";
}
$items = thong_ke_hang_hoa();
require_once "/xampp/htdocs/DAM_FALL2022/admin/trang-chinh/layout.php";

