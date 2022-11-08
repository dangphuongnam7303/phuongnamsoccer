<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .ql{
            width: 500px;
            margin: 0 auto;
        }
        .ql a {
            text-decoration: none;
        }
        .ql a:hover {
            text-decoration: underline;
            color: red;
        }
    </style>
    </head>

<body>
    <div class="ql">
        <h3>QUẢN LÝ LOẠI HÀNG</h3>
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5>$MESSAGE</h5>";
        }
        ?>
        <form action="index.php" class="form-control" method="post">
            <div>
                <label>Mã loại</label>
                <input class="form-control" name="ma_loai" value="auto number" readonly>
            </div>

            <div>
                <label>Tên loại</label>
                <input class="form-control" name="ten_loai">
            </div>
            <div>
                <button class="btn btn-outline-primary" name="btn_insert">Thêm mới</button>
                <button class="btn btn-outline-primary" type="reset">Nhập lại</button>
                <a  href="index.php?btn_list">Danh sách</a>
            </div>
        </form>
    </div>

</body>

</html>