<!DOCTYPE html>

<head>
    <style>
        .top10 div a {
            display: block;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: black;
            margin-top: 5px;
        }


        .top10 {
            text-align: center;
            position: relative;
            padding: 10px 20px;
            background: #fff;
            margin-bottom: 25px;
            border-radius: 5px;
        }

        .top10::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
            margin: -5px;
            border-radius: inherit;
            background-image: linear-gradient(45deg, purple, orange);
        }

        .top10_head {
            text-align: center;
            margin-bottom: 15px;
            background: #FF0000;
            background: radial-gradient(circle farthest-corner at center center, #FF0000 0%, #FFFF00 25%, #05C1FF 50%, #FFFF00 75%, #FF0000 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }
    </style>
</head>
<html>

<body>
    <div>
        <h1 class="top10_head">TOP 10 YÊU THÍCH</h1>
        <div>
            <?php
            require_once '../../dao/hang-hoa.php';
            $hh_array = hang_hoa_select_top10();
            foreach ($hh_array as $hh) {
                $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                echo "
                            <div class='top10'>
                                <a href='$href'><img width=200px height=150px src='$CONTENT_URL/images/products/$hh[hinh]'></a>
                                <div><a href='$href'>$hh[ten_hh]</a></div>
                            </div>
                        ";
            }
            ?>
        </div>
    </div>
</body>

</html>