<!DOCTYPE html>
<html>
<head>
    <style>
        .log{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .log form button{
            width: 150px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h2 style="margin:0px;margin-bottom:10px"><?=$_SESSION['user']['vai_tro'] == TRUE?'ADMIN':'USER'?></h2>
        <div>
            <div>
                <img width="100px" height="120px" src='<?= $CONTENT_URL ?>/images/users/<?= $_SESSION['user']['hinh'] ?>'>
                <br>
               <h4 style="margin:0px;margin-bottom:10px"><?= $_SESSION['user']['ho_ten'] ?></h4> 
            </div>
            <div class="log">
                <form style="padding:0px" action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php?act=btn_logoff">
                    <input type="hidden" name="act" value="btn_logoff" id="name">
                    <button>Đăng xuất</button>
                </form>
                <form style="padding:0px" action="<?= $SITE_URL ?>/tai-khoan/doi-mk.php"><button>Đổi mật khẩu</button></form>
                <form style="padding:0px" action="<?= $SITE_URL ?>/tai-khoan/cap-nhat-tk.php"><button>Cập nhật</button></form>
                <?php
                if ($_SESSION['user']['vai_tro'] == TRUE) {
                    echo "<form style='padding:0px' action='$ADMIN_URL/trang-chinh'><button>Quản trị</button></form>";
                }
                ?>
            </div>

        </div>
    </div>
</body>

</html>