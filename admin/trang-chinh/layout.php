<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php'
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
                <?php require_once $VIEW_NAME ?>
            </article>
        </main>
    </div>
</body>

</html>