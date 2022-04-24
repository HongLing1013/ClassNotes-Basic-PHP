<h3>用陣列來放學生的資料</h3>
<?php
$student=["judy","amo","john","peter","hebe"];
$suject=["國文","英文","數學","地理","歷史"];
$score[]=["95","64","70","90","84"];
$score[]=["88","78","54","81","71"];
$score[]=["45","60","68","70","62"];
$score[]=["59","32","77","54","42"];
$score[]=["71","62","80","62","64"];

for($i=0;$i < count($student);$i++){
    echo $student[$i].":";
    for($j=0;$j < count($suject);$j++){
    echo $suject[$j]." :".$score[$i][$j].",";
    }
    echo "<br>";
}
?>