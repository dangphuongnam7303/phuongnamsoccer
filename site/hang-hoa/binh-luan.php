<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/dao/binh-luan.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../content/css/binh-luan.css">
    <style>
        .pull-right{
            font-size: 20px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="panel panel-default">
        <div class="panel-heading">BÌNH LUẬN</div>
        <div class="panel-body">
            <?php
            require_once '/xampp/htdocs/DAM_FALL2022/dao/binh-luan.php';
            if (exist_param("noi_dung")) {
                $ma_kh = $_SESSION['user']['ma_kh'];
                $ngay_bl = date_format(date_create(), 'Y-m-d');
                binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
            }
            $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
            foreach ($binh_luan_list as $bl) {
                echo "<li>$bl[noi_dung] <i class='pull-right'><b>$bl[ma_kh]</b>, $bl[ngay_bl]</i></li>";
            }
            ?>
        </div>
        <div class="panel-footer">
            <?php
            if (!isset($_SESSION['user'])) {
                echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
            } else {
            ?>
                <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-10">
                                <input type="text" name="noi_dung" class="question" id="nme" required autocomplete="off" />
                                <label for="nme"><span>How do you feel?</span></label>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="snip1547">Gửi</button>
                            </div>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
    <script>
        $(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);
    </script>
</body>

</html>