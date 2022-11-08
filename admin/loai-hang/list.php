<!DOCTYPE html>
<html>
    <head>
        <!-- <script src="../../content/js/xshop-list.js"></script> -->
        <link rel="stylesheet" href="../../content/css/table.css">
    </head>
    <body>
        <h3>QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_loai[]" value="<?=$ma_loai?>"></th>
                        <td><?=$ma_loai?></td>
                        <td><?=$ten_loai?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_loai=<?=$ma_loai?>" >Sửa</a>
                            <a href="index.php?btn_delete&ma_loai=<?=$ma_loai?>" >Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
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

