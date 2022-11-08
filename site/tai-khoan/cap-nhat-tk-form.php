<!DOCTYPE html>
<html>
<head>
    <style>
        .cap_nhat {
            background: #50a3a2;
            margin-left: 300px;
            padding:0 150px;

        }
        .cap_nhat form div input {
            margin-top: 5px;
        }
    </style>
</head>
    <body>
        <div class="cap_nhat">
        <h3>UPDATE USER</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <img src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>" style="max-width: 95%">
                </div>
                <div>
                    <div>
                        <label>Username</label>
                        <input name="ma_kh" value="<?=$ma_kh?>" readonly>
                    </div>
                    <div>
                        <label>Name</label>
                        <input name="ho_ten" value="<?=$ho_ten?>">
                    </div>
                    <div>
                        <label>Email</label>
                        <input name="email" value="<?=$email?>">
                    </div>
                    <div>
                        <label>Image</label>
                        <input name="up_hinh" type="file">
                    </div>
                    <div>
                        <button style="margin-left:15px" name="btn_update">Update</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="vai_tro" value="<?=$vai_tro?>" type="hidden">
                    <input name="kich_hoat" value="<?=$kich_hoat?>" type="hidden">
                    <input name="mat_khau" value="<?=$mat_khau?>" type="hidden">
                    <input name="hinh" value="<?=$hinh?>" type="hidden">
                </div>
            </div>
        </form>
        </div>
        
    </body>
</html>
