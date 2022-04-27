<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>五百年內的閏年</title>
</head>
<body>
    <div>
        <a href="index.php">回目錄</a>
    </div>
<h2>五百年內的閏年</h2>
<?php
$leapYear=[];
$start=2022;
$end=$start+500;
for($year=$start;$year<=$end;$year++){
    if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
        $leapYear[]=$year;
    }
}
echo"<pre>";
print_r($leapYear);
echo"</pre>";
?>



<h2>查詢資料庫的某一年是否為閏年</h2>
<?php
$leapYear=[];
$start=2022;
$end=$start+500;
for($year=$start;$year<=$end;$year++){
    if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
        $leapYear[]=$year;
    }
}
$leap=2236;
if(in_array($leap,$leapYear)){
    echo $leap . '年是閏年';
}else{
    echo $leap. '年不是閏年';
}
?>
</body>
</html>

