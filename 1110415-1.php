<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>求天干地支年</title>
</head>
<body>
    
<div><a href="index.php">回目錄</a></div>

<h2>求某年的天干地支年</h2>
<pre>
    天干：甲乙丙丁戊己庚辛壬癸
    地支：子丑寅卯辰巳午未申酉戌亥
    天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子…
    1024年開始
</pre>
<?php
$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

$skyland=[];
$year=2022;
$year1=2022-1024;

echo $year."年是";
echo $sky[$year1%10] .$land [$year1%12]."年";
?>

<h2>求某年的天干地支年-2</h2>
<?php
$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

$skyland2=[];
$year=(2022-1024);

echo $sky[$year%10] . $land[$year%12];

for($i=1024;$i<=2048;$i++){
    $year=$i-1024;
    $skyland2[$i]=$sky[$year%10] . $land[$year%12];
}

echo "<pre>";
print_r($skyland2);
echo "</pre>";

echo "西元2022年是 [".$skyland2[2022]."]年";
?>
</body>
</html>