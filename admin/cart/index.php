<?php
// require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/dao/gio-hang.php';

$items = join_gio_hang();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quản trị website</title>
    <script src="<?= $CONTENT_URL ?>/js/jquery.min.js" type="text/javascript"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="../../content/css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="../../content/css/table.css">

</head>

<body>
    <div class="layout">
        <header>
            <h1>QUẢN TRỊ WEBSITE</h1>
            <div class="admin">
                <h2>Xin chào, <?= $_SESSION['user']['ho_ten'] ?></h2>
            </div>
        </header>
        <main>
            <aside>
                <?php require_once '/xampp/htdocs/DAM_FALL2022/admin/trang-chinh/menu.php' ?>
            </aside>
            <article>
                <h1>Đơn mua</h1>
            <div class="table-wrapper">
        <table class="fl-table">
        <thead>
                    <tr>
                        <th>MÃ ĐƠN</th>
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>HÀNG HÓA</th>
                        <th>SỐ LƯỢNG</th>
                        <th>ĐỊA CHỈ</th>
                        <th>EMAIL</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>

                <tr>
                    <td><?= $item[0]?></td>
                    <td><?= $item[1]?></td>
                    
                    <td><?= $item['ten_hh']?></td>
                    <td><?= $item[6]?></td>
                    <td><?= $item[3]?></td>
                    
                    <td><?= $item[4]?></td>
                    <td><?= $item[5]?></td>

                </tr>


                <?php }?>
                </tbody>
        </table>
    </div>
            </article>
        </main>
    </div>
</body>

</html>