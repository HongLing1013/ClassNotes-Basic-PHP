<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算日期</title>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>計算日期</h1>
    <p>給定兩個日期，計算中間間格天數</p>
    <!-- 間隔就是沒有頭尾的日期 -->
    <?php
    $day1="2022-4-10";
    $day2="2022-4-20";
    echo "日期一=>".$day1."<br>";
    echo "日期二=>".$day2."<br>";

    $time1=strtotime($day1);
    $time2=strtotime($day2);
    echo "<br>";
    echo "日期一的秒數:".$time1;
    echo "<br>";
    echo "日期二的秒數:".$time2;
    echo "<br>";
    echo "<br>";
    
    $gap=($time2-$time1-(24*60*60));//得到兩者間格的秒數
    // 因為要去頭尾 所以要再多減掉一天
    // 故算式後面要多減去(24*60*60)
    $gap=$gap/(60*60*24);//換算成天

    echo "中間間隔".$gap."天<br>";
    
    $duration=($time2-$time1+(24*60*60));
    $duration=$duration/(60*60*24);
    echo "經過了".$duration."天<br>";

    $diff=($time2-$time1);
    $diff=$diff/(60*60*24);
    echo "相差了".$diff."天<br>";
    
    ?>

</body>
</html>