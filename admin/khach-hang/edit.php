<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        .ql{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="ql">
    <h3>QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" class="form-control" enctype="multipart/form-data">
        <div>
            <div>
                <label>MÃ KHÁCH HÀNG</label>
                <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>" readonly>
            </div>
            <div>
                <label>HỌ VÀ TÊN</label>
                <input class="form-control" name="ho_ten" value="<?= $ho_ten ?>">
            </div>
        </div>
        <div>
            <div>
                <label>MẬT KHẨU</label>
                <input class="form-control" name="mat_khau" value="<?= $mat_khau ?>" type="password">
            </div>
            <div>
                <label>XÁC NHẬN MẬT KHẨU</label>
                <input class="form-control" name="mat_khau2" value="<?= $mat_khau ?>" type="password">
            </div>
        </div>
        <div>
            <div>
                <label>ĐỊA CHỈ EMAIL</label>
                <input class="form-control" name="email" value="<?= $email ?>">
            </div>
            <div>
                <label>HÌNH ẢNH</label>
                <input class="form-control" name="hinh" type="hidden" value="<?= $hinh ?>">
                <input class="form-control" name="up_hinh" type="file"> (<?= $hinh ?>)
            </div>
        </div>
        <div>
            <div>
                <label>KÍCH HOẠT?</label>
                <div>
                    <label>
                        <input class="form-check-input" <?= !$kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="0" type="radio">
                        Chưa kích hoạt
                    </label>
                    <label>
                        <input class="form-check-input" <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="1" type="radio">
                        Kích hoạt
                    </label>
                </div>
            </div>
            <div>
                <label>VAI TRÒ</label>
                <div>
                    <label>
                        <input  class="form-check-input" <?= !$vai_tro ? 'checked' : '' ?> name="vai_tro" value="0" type="radio">
                        Khách hàng
                    </label>
                    <label>
                        <input class="form-check-input" <?= $vai_tro ? 'checked' : '' ?> name="vai_tro" value="1" type="radio">
                        Nhân viên
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div>
                <button class="btn btn-outline-primary" name="btn_update">Cập nhật</button>
                <button class="btn btn-outline-primary" type="reset">Nhập lại</button>
                <a href="index.php">Thêm mới</a>
                <a href="index.php?btn_list">Danh sách</a>
            </div>
        </div>
    </form>
    </div>
    
</body>

</html>