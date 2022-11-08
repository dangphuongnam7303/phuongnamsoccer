<!DOCTYPE html>
<html>
<head>
    <style>
        .doi_mk {
            background: #50a3a2;
            margin-left: 300px;
            padding:0 150px;

        }
        .doi_mk form div input {
            margin-top: 5px;
        }
    </style>
    
</head>
<body>
    <div class="doi_mk">
        <h3>Change Password</h3>
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5>$MESSAGE</h5>";
        }
        ?>
        <form action="doi-mk.php" method="post">
            <div>
                <label>Username</label>
                <input name="ma_kh">
            </div>
            <div>
                <label>Password</label>
                <input name="mat_khau" type="password">
            </div>
            <div>
                <label>New Password</label>
                <input name="mat_khau2" type="password">
            </div>
            <div>
                <label>Re-new Password</label> 
                <input name="mat_khau3" type="password">
            </div>
            <div>
                <button style="margin-left:15px" name="btn_change">Confirm</button>
            </div>
        </form>
    </div>

</body>

</html>