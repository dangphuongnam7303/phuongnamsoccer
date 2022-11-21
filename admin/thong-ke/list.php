<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../../content/css/table.css">
    
    </head>
    <body>
        <h3>THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h3>
        <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($items as $item){
                    extract($item);
            ?>
                <tr>
                    <td><?=$ten_loai?></td>
                    <td><?=$so_luong?></td>
                    <td>$<?=number_format($gia_min,2)?></td>
                    <td>$<?=number_format($gia_max,2)?></td>
                    <td>$<?=number_format($gia_avg,2)?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <br>
        <a href="index.php?chart">Xem biểu đồ</a>

        </div>
        
    </body>
</html>
