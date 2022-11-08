<?php
require_once '/xampp/htdocs/DAM_FALL2022/dao/pdo.php';
require '/xampp/htdocs/DAM_FALL2022/global.php';
extract($_REQUEST);


function lien_he_select_all(){
    $sql = "SELECT * FROM lien_he";
   return pdo_query($sql);
}

?>