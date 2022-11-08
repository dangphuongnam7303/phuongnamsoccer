<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post"  enctype="multipart/form-data" class="form-control">
            <div>
                <div>
                    <label>MÃ HÀNG HÓA</label>
                    <input class="form-control" name="ma_hh" readonly value="<?=$ma_hh?>" class="form-control">
                </div>
                <div>
                    <label>TÊN HÀNG HÓA</label>
                    <input class="form-control" name="ten_hh" value="<?=$ten_hh?>"class="form-control">
                </div>
                <div>
                    <label>ĐƠN GIÁ</label>
                    <input class="form-control" name="don_gia" value="<?=$don_gia?>"class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <label>GIẢM GIÁ</label>
                    <input class="form-control" name="giam_gia" value="<?=$giam_gia?>"class="form-control">
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input name="up_hinh" type="file"class="form-control">
                    <input name="hinh" type="hidden" value="<?=$hinh?>"class="form-control"> (<?=$hinh?>)
                </div>
                <div>
                    <label>LOẠI HÀNG</label>
                    <select class="form-control" name="ma_loai" class="form-control">
                            <?php $ma_loai = $_GET['ma_loai']; foreach ($loai_select_list as $loai) :?>
                                <option value="<?= $loai['ma_loai']?>" <?php if($loai['ma_loai'] == $ma_loai) echo 'selected';?> >  <?= $loai['ten_loai'] ?></option>
                                <?php endforeach;?>               
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input class="form-check-input" name="dac_biet" value="0" type="radio" class="form-check-input" <?=$dac_biet?'':'checked'?>>Đặc biệt</label>
                        <label><input class="form-check-input" name="dac_biet" value="1" type="radio" class="form-check-input"<?=$dac_biet?'checked':''?>>Bình thường</label>
                    </div>
                </div>
                <div>
                    <label>NGÀY NHẬP</label>
                    <input class="form-control" name="ngay_nhap" value="<?=$ngay_nhap?>" class="form-control">
                </div>
                <div>
                    <label>SỐ LƯỢC XEM</label>
                    <input class="form-control" class="form-control" name="so_luot_xem" readonly value="0" class="form-control" value="<?=$so_luot_xem?>">
                </div>
            </div>
            <div>
                <div>
                    <label>MÔ TẢ</label>
                    <textarea class="form-control" class="form-control" name="mo_ta" rows="4"><?=$mo_ta?></textarea>
                </div>
                <div>
                    <button class="btn btn-outline-primary" name="btn_update">Cập nhật</button>
                    <button class="btn btn-outline-primary" type="reset">Nhập lại</button>
                    <a href="index.php">Thêm mới</a>
                    <a href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
        </div>
        
    </body>
</html>
