<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

        <style>
            .cate li{
                list-style: none;
            }
            .cate li a{
                display: block;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #ccc;
            margin-top: 5px;
            }

        </style>
    </head>
    <body>
        <div>
            <h2>Categories</h2>
            <div class="cate">
                <?php
                    require_once '/xampp/htdocs/DAM_FALL2022/dao/loai.php';
                    $loai_array = loai_select_all();
                    
                    foreach ($loai_array as $loai) {
                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                        echo "<li> <a href='$href'>$loai[ten_loai]</a></li>";
                    }
                ?>
            </div>
            <div>
                <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                
                    <input name="keywords" style="color:black;border:1px solid" placeholder="Search">
                </form>                
            </div>            
        </div>
    </body>
    
</html>
