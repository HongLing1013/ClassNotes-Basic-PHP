<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用陣列來做月曆</title>
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

    <h1>用陣列來做月曆</h1>
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

$dateHouse=[];
for($i=0;$i<$monthDays;$i++){
    $date=date("Y-m-d",strtotime("+$i days",strtotime($firstDay)));
    $dateHouse[]=$date;
}

echo "<pre>";
print_r($dateHouse);
echo "</pre>";

echo "月份" . $month;
echo "<br>";
echo "第一天是" . $firstDay;
echo "<br>";
echo "第一天是星期" . $firstWeekday;
echo "<br>";
echo "最後一天是" . $lastDay;
echo "<br>";
echo "當月天數共" . $monthDays;
echo "<br>";

for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        $d = $i * 7 + ($j + 1) - $firstWeekday - 1; 
        if ($d >= 0 && $d < $monthDays) {
            $fs=strtotime($firstDay);
            $shiftd=strtotime("+$d days",$fs);
            $date=date("d",$shiftd);
            $w=date("w",$shiftd);

            $chktoday="";
            if(date("Y-m-d",$shiftd)==$today){
                $chktoday='today';
            }
            if($w==0 || $w==6){
                echo "<td class='weekend $chktoday'>";
            }else{
                echo "<td class='workday $chktoday'>";
            }
            echo $date;
            echo "</td>";
        }else{
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
?>

    </table>

    </body>
    </html>