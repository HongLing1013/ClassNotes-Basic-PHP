<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>製作簡易月曆</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table td{
            padding: 5px;
            text-align: center;
            border: 1px solid #aaa;
        }
    </style>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>製作簡易月曆</h1>
    <?php
$month = 4;
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
        $d = $i * 7 + ($j + 1) - $firstWeekday - 1; //算這這格在這個月是第幾天
        echo "<td>";
        if ($d >= 0 && $d < $monthDays) {
            $fs=strtotime($firstDay);
            $shiftd=strtotime("+$d days",$fs);
            $date=date("Y-m-d",$shiftd);//可選擇要顯示的格式
            // $date = date("Y-m-d", strtotime("+$d days", strtotime($firstDay)));
            //從第一天去算 算日期 轉成秒數後給date用Y-m-d的格式呈現
            echo $date;
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
<!-- 先把第一天轉成秒數 再讓他去算要移動幾天 再用那幾天去轉換成秒數 換算成我們要的日期 -->
    </table>

    </body>
    </html>