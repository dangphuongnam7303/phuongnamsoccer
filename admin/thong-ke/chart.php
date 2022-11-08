<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Loại', 'Số Lượng'],
                <?php
                foreach ($items as $item){
                    echo "['$item[ten_loai]',     $item[so_luong]],";
                }
                ?>
            ]);

            var options = {
              title: 'TỶ LỆ HÀNG HÓA',
              is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
          }
        </script>
    </head>
    <body>
        <h3>BIỂU ĐỒ THỐNG KÊ</h3>
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </body>
</html>
