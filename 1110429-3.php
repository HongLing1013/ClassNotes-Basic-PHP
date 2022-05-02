<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flex月曆</title>
    <style>
        .table{
            width: 560px;
            height: 560px;
            /* border: 1px solid lightslategray; */
            display: flex;
            flex-wrap: wrap;
            align-content: baseline;
            margin-left: 1px;
            margin-top: 1px;
        }
        .table div{
            display: inline-block;
            width: 80px;
            height: 80px;
            border: 1px solid pink;
            box-sizing: border-box;
            margin-left: -1px;
            margin-top: -1px;
        }

        .table .header{
            background: black;
            color: white;
            height: 32px;
        }
        .weekend{
            background: pink;
        }
        .workday{
            background: white;
        }
        .today{
            background: lightseagreen;
        }
    </style>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>flex月曆</h1>
    <?php
$month = 5;

$firstDay = date("Y/") . $month . "/1"; 
$firstWeekday = date("w", strtotime($firstDay));
$monthDays = date("t", strtotime($firstDay)); 
$lastDay = date("Y-") . $month . "-" . $monthDays;
$today=date("Y-m-d");
$lastWeekday=date("w",strtotime($lastDay));//找到最後一天
$dateHouse=[];

for($i=0;$i<$firstWeekday;$i++){
    $dateHouse[]="";    //產生前面的空白
}
for($i=0;$i<$monthDays;$i++){
    $date=date("Y-m-d",strtotime("+$i days",strtotime($firstDay)));
    $dateHouse[]=$date;
}

for($i=0;$i<(6-$lastWeekday);$i++){
    $dateHouse[]="";
}

?>

<div class="table">
    <div class="header">日</div>
    <div class="header">一</div>
    <div class="header">二</div>
    <div class="header">三</div>
    <div class="header">四</div>
    <div class="header">五</div>
    <div class="header">六</div>
<?php
foreach($dateHouse as $day){
    if(!empty($day)){
        $dayFormat=date("j",strtotime($day));
        echo"<div>{$dayFormat}</div>";
    }else{
        echo"<div></div>";
    }
}
?>
</div>

    </body>
    </html>