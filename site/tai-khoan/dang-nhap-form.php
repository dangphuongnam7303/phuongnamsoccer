<!DOCTYPE html>
<html>
    <head>
        <style>
            .dangnhap {
            background: #50a3a2;
            margin-left: 300px;
            padding:0 150px;

        }
        .dangnhap form div input {
            margin-top: 5px;
        }
        .ghi_nho{
            width: 10px;
        }
        </style>
    </head>
    <body>
        <div class="dangnhap">
        <h3>ĐĂNG NHẬP</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-nhap.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh" value="<?=$ma_kh?>">
            </div>
            <div>
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" value="<?=$mat_khau?>">
            </div>
            <div>
                <label>
                    <input name="ghi_nho"  class="ghi_nho" type="checkbox" checked>
                    Ghi nhớ tài khoản?
                </label>
            </div>
            <div>
                <button name="btn_login">Đăng nhập</button>
            </div>
        </form>
        </div>
        
    </body>
</html>
