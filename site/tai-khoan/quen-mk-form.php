<!DOCTYPE html>
<html>
<head>
    <style>
        .quen_mk {
            background: #50a3a2;
            margin-left: 300px;
            padding:0 150px;

        }
        .quen_mk form div input {
            margin-top: 5px;
        }
    </style>
</head>
    <body>
        <div class="quen_mk">
        <h3>Forget Password</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="quen-mk.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh">
            </div>
            <div>
                <label>Địa chỉ email</label>
                <input name="email">
            </div>
            <div>
                <button style="margin-left:15px" name="btn_forgot">Tìm lại mật khẩu</button>
            </div>
        </form>
        </div>
        
    </body>
</html>
