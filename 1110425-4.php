<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算生日倒數</title>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>計算生日倒數</h1>

    <?php
    $birthday="10-13";
    echo "你的生日是".$birthday."<br>";
    // $now=strtotime('now');<<會顯示顯在的時間 單位是秒數,但生日不是秒所以要以日來做
    $today=strtotime(date("Y-m-d"));//算今天的秒數
    $mybirth=strtotime(date("Y-").$birthday);//算出今年的生日 轉成秒數所以要在外面加strtotime
    $diff=0;
    $result="";
    
    if($mybirth-$today>0){//先確定哪個日期比較大 是不是今年
        $diff=($mybirth-$today)/(24*60*60);//我要倒數的日期
        $result="距離妳的生日還有<span style='color:red'>".$diff."</span>天";
    }else if($mytirth-$today<0){//如果已經過了
        $mybirth=strtotime("+1 year".$mybirth);//+1年
        $diff=($mybirth-$today)/(24*60*60);//計算明年的生日
        $result="距離妳的生日還有<span style='color:red'>".$diff."</span>天";
    }else{
        $result="今天是你的生日，祝你生日快樂";
    }

    echo $result;
    ?>

</body>
</html>