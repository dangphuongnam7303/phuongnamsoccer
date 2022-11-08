<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    <link rel="stylesheet" href="../../content/css/table.css">

    </head>
    <body>
        <h3>QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ KH</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>ĐỊA CHỈ EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>VAI TRÒ?</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_kh[]" value="<?=$ma_kh?>"></th>
                        <td><?=$ma_kh?></td>
                        <td><?=$ho_ten?></td>
                        <td><?=$email?></td>
                        <td><?=$hinh?></td>
                        <td><?=$vai_tro?'Nhân viên':'Khách hàng'?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_kh=<?=$ma_kh?>">Sửa</a>
                            <a href="index.php?btn_delete&ma_kh=<?=$ma_kh?>">Xóa</a>
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
