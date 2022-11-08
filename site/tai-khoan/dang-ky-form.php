<!DOCTYPE html>
<html>

<head>
    <style>
        .dky {
            background: #50a3a2;
            margin-left: 300px;
            padding:0 150px;

        }
        .dky form div input {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="dky">
        <h3>ĐĂNG KÝ THÀNH VIÊN</h3>
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5>$MESSAGE</h5>";
        }
        ?>
        <form action="dang-ky.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Username</label>
                <input name="ma_kh" value="<?= $ma_kh ?>">
            </div>
            <div>
                <label>Password</label>
                <input name="mat_khau" type="password" value="<?= $mat_khau ?>">
            </div>
            <div>
                <label>Re-Password</label>
                <input name="mat_khau2" type="password" value="<?= $mat_khau2 ?>">
            </div>
            <div>
                <label>Name</label>
                <input name="ho_ten" value="<?= $ho_ten ?>">
            </div>
            <div>
                <label>Email</label>
                <input name="email" value="<?= $email ?>">
            </div>
            <div>
                <label>Image</label>
                <input name="up_hinh" type="file">
            </div>
            <div>
                <button style="margin-left:15px" name="btn_register">Sign Up</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
        </form>
    </div>

</body>

</html>