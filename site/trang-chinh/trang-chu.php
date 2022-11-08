<?php
require_once '/xampp/htdocs/DAM_FALL2022/dao/hang-hoa.php';
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
require_once '/xampp/htdocs/DAM_FALL2022/site/hang-hoa/liet-ke.php';

foreach ($items as $item) {

?>
    <div>
        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">
            <img width="200px" height="150px" src="<?= $CONTENT_URL ?>/images/products/<?= $item['hinh'] ?>" />
            <p><?= $item['ten_hh'] ?></p>
            <p><?= $item['don_gia'] ?></p>
            <p><?= $item['giam_gia'] ?></p>
        </a>
    </div>
<?php
}
?>