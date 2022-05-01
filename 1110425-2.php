<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strtotime()</title>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>strtotime()</h1>
    <!-- 把日期格式轉成時間 -->
    <!-- 用strtotime的話 日期時間的字串要盡量符合普遍使用的 -->
    <!-- 最不會出錯的時間日期字串格式 yyyy-mm-dd hh:mm:ss -->

    <?PHP
    $time="2021-10-01 10:12:30";
    $s=strtotime($time);//$s=second
    echo $time;//要處理的時間
    echo "<br>";
    echo $s;//以上時間的秒數,將來時間轉換要放到date裡面做運算基礎用

    echo "<br>接下來就可以用我們要的格式來呈現<br>";
    echo date("西元 Y 年 m 月 d 日 l",$s);
    echo "<hr>";
    ?>

    <h3>時間運算</h3>

    <?PHP
    echo "加兩天";
    $splus=strtotime("+2 days",$s);
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l",$splus);

    echo "<br>加一個月";
    $mplus=strtotime("+1 months",$s);
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l",$mplus);

    echo "<br>減一個月";
    $pplus=strtotime("-1 months",$s);
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l",$pplus);
    ?>



</body>
</html>