<?php
require_once '/xampp/htdocs/DAM_FALL2022/dao/hang-hoa.php';
require_once '/xampp/htdocs/DAM_FALL2022/admin/hang-hoa/index.php';

?>
<!DOCTYPE html>
<html>
    <head>
    <!-- <script src="../../content/js/xshop-list.js"></script> -->
    <link rel="stylesheet" href="../../content/css/table.css">
    <style>
        .list_move{
            list-style: none;
            display: flex;
            align-items: center;
            margin-left: 415px;
        }
        .list_move li {
            margin-right: 35px;
        }
    </style>
    </head>
    <body>
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <ul class="list_move">
            <li><a href="?btn_list&page_no=0">|&lt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_no']-1?>">&lt;&lt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_no']+1?>">&gt;&gt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_count']-1?>">&gt;|</a></li>
        </ul>
        <form action="index.php" method="post">
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ HH</th>
                        <th>TÊN HH</th>
                        <th>ĐƠN GIÁ</th>
                        <th>GIẢM GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_hh[]" value="<?=$ma_hh?>"></th>
                        <td><?=$ma_hh?></td>
                        <td><?=$ten_hh?></td>
                        <td>$<?=number_format($don_gia, 2)?></td>
                        <td><?=number_format($giam_gia*100)?>%</td>
                        <td><?=$so_luot_xem?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_hh=<?=$ma_hh?>&ma_loai=<?= $ma_loai?>">Sửa</a>
                            <a href="index.php?btn_delete&ma_hh=<?=$ma_hh?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <button id="check-all" type="button">Chọn tất cả</button>
                            <button id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                            <a href="index.php">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        </form>
        
    </body>
</html>
