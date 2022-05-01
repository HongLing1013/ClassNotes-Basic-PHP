<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期/時間練習</title>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>日期/時間練習</h1>

    <p>沒設定時區直接echo</p>
    <?php
    echo date("Y-m-d H:i:s");
    ?>
    <p>沒設定的話會顯示的是格林威治時間
    跟台灣差了六個小時...</p>

    <hr>

    <p>設定時區後再echo</p>
    <?php
    date_default_timezone_set("Asia/Taipei");//設定時區為台北
    echo date("Y-m-d H:i:s");//顯示的時間格式 年-月-日 時:分:秒
    ?>
    <hr>

    <p>也可以使用其他格式呈現</p>
    <!-- 格式化 (format) -->
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("y年n月j日 G點i分s秒");
    echo "<br>";
    echo date("M/j/Y h:i:s");
    ?>
</body>
</html>