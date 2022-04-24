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