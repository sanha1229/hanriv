<!-- © sanha1229, all rights reserved. -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>한강 수온</title>
        <link rel="stylesheet" href="/design/style.css">
    </head>
    <body style="display:none;">
        <?php 
        include $_SERVER['DOCUMENT_ROOT'].'/refer/han.php';
        $current_han = getHanTemp();
        ?>
        <div id="main">
            <h1 id="title">한강 수온</h1>
            <h2 id="subtit">Han river water temperature</h2>
            <div id="temp">
                <h2><?php echo $current_han['temp'].'°C'; ?></h2>
                <h2><?php echo $current_han['temp'].'°C'; ?></h2>
            </div>
            <div id="time">
                <p><?php echo $current_han['date'] . ' ' . $current_han['time']; ?></p>
            </div>
        </div>
        <footer>
            <p>
        이 페이지는 <a class="powered-by no-deco" href="https://data.seoul.go.kr/dataList/OA-15488/S/1/datasetView.do">서울 열린 데이터 광장의 서울특별시 한강 및 주요지천 수질 측정 자료 (CCL: CC BY)</a>를 활용하여 만들어졌습니다.
            </p>
            <p>&copy; 2020-2022 <a 
 class="no-deco powered-by" href="https://github.com/sanha1229">sanha1229</a></p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="/script/main.js"></script>
    </body>
</html>
