<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        .ql{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="ql">
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5>$MESSAGE</h5>";
        }
        ?>
        <form action="index.php" method="post" class="form-control" enctype="multipart/form-data">
            <div>
                <div>
                    <label>MÃ HÀNG HÓA</label>
                    <input class="form-control" name="ma_hh" readonly value="auto number">
                </div>
                <div>
                    <label>TÊN HÀNG HÓA</label>
                    <input class="form-control" name="ten_hh">
                </div>
                <div>
                    <label>ĐƠN GIÁ</label>
                    <input class="form-control" name="don_gia">
                </div>
            </div>
            <div>
                <div>
                    <label>GIẢM GIÁ</label>
                    <input class="form-control" name="giam_gia">
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input class="form-control" name="hinh" type="file">
                </div>
                <div>
                    <label>LOẠI HÀNG</label>
                    <select class="form-control" name="ma_loai">
                        <?php
                        foreach ($loai_select_list as $loai) {
                            echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input class="form-check-input" name="dac_biet" value="0" type="radio">Đặc biệt</label>
                        <label><input class="form-check-input" name="dac_biet" value="1" type="radio" checked>Bình thường</label>
                    </div>
                </div>
                <div>
                    <label>NGÀY NHẬP</label>
                    <input class="form-control" name="ngay_nhap">
                </div>
                <div>
                    <label>SỐ LƯỢC XEM</label>
                    <input class="form-control" name="so_luot_xem" readonly value="0">
                </div>
            </div>
            <div>
                <div>
                    <label>MÔ TẢ</label>
                    <textarea class="form-control" name="mo_ta" rows="4"></textarea>
                </div>
                <div>
                    <button class="btn btn-outline-primary" name="btn_insert">Thêm mới</button>
                    <button class="btn btn-outline-success" type="reset">Nhập lại</button>
                    <a href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>