<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用函式呈現不同的時間格式</title>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>利用函式呈現不同的時間格式</h1>

    <?php date_default_timezone_set("Asia/Taipei");?>

    <?=date("Y/m/d");?>
    <hr>
    <?=date("n月j日 l");?>
    <hr>
    <?=date("Y-n-j G:").(int)date("i").":".(int)date("s");?>
    <hr>
    <?=date("Y-m-d H:i:s");?>
    <hr>
    <?php
    $workday="";
    $w=date("w");//判斷今天星期幾 得到0-6
    if($w==0 ||$w==6){
        $workday="假日";
    }else{
        $workday="工作日";
    }
    echo date("今天是西元Y年n月j日") . $workday;
    ?>
    <hr>
</body>
</html>