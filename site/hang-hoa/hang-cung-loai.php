<!DOCTYPE html>
<html>
    <body>
        <div class="panel panel-default" style="height: 100px; text-align:center" >
            <div class="panel-heading">HÀNG CÙNG LOẠI</div>
            <div>
                <ul>
                    <?php
                    $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
                    foreach ($hh_cung_loai as $hh) {
                        
                        echo "<li><a href='chi-tiet.php?ma_hh=$hh[ma_hh]'>$hh[ten_hh]</a></li>";
                    }
                    ?>
                </ul>                
            </div>
        </div>
    </body>
</html>
