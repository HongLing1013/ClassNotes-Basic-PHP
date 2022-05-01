<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用迴圈計算連續五週的日期</title>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>利用迴圈計算連續五週的日期</h1>
    <?php
    $today=date("Y-m-d l");
    echo $today;
    echo "<br>下周一<br>";
    $todaytime=strtotime(date("Y-m-d"));//可計算的時間
    
    $n=5;
    for($i=0;$i<=$n;$i++){
        $nextweek=strtotime("+$i week",$todaytime);
        echo date("Y-m-d l",$nextweek)."<br>";
    }
    ?>
   
</body>
</html>