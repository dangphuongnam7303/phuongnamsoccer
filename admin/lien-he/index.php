<?php
// require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/dao/lien-he.php';

$items = lien_he_select_all();

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
                <h1>Contacts</h1>
            <div class="table-wrapper">
        <table class="fl-table">
        <thead>
                    <tr>
                        <th>MÃ</th>
                        <th>HỌ TÊN</th>
                        <th>EMAIL</th>
                        <th>MESSAGE</th>
                        <th>NGÀY</th>
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
                    <td><?= $item[2]?></td>
                    <td><?= $item[3]?></td>
                    <td><?= $item[4]?></td>
                    

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