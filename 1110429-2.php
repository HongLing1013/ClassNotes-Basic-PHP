<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>把陣列的參數帶到月曆裡面</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table td{
            padding: 5px;
            text-align: center;
            border: 1px solid #aaa;
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

    <h1>把陣列的參數帶到月曆裡面</h1>
    <?php
$month = 5;
?>

    <table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
    <?php

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

echo "<pre>";
print_r($dateHouse);
echo "</pre>";

foreach($dateHouse as $key=>$day){
    if($key%7==0){
        echo "<tr>";
    }
    if(!empty($day)){
        $dayFormat=date("d",strtotime($day));
    }else{
        $dayFormat="";
    }
    // 可以簡化成運算式
    //$dayFormat=(!empty($day))?date("d",strtotime($day)):"";
    echo "<td>{$dayFormat}</td>";
    if($key%7==6){
        echo "</tr>";
    }
}

?>

    </table>

    </body>
    </html>