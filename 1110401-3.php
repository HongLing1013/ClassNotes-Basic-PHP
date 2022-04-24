<h3>基本的閏年</h3>
<?php
//不可被4整除=平年
//可被4整除且不為100整除=閏年
//可被400整除=閏年
//可被1000整除=閏年
$year = 1482;
echo "年=>" . $year . "<br>";
//mod(%)=取於數
if ($year % 4 != 0) {echo "這是平年";} else {
    if ($year % 100 != 0) {echo "這是閏年";} else {
        if ($year % 400 != 0) {echo "這是平年";} else {echo "這是閏年";}}}
?>



<h3>閏年的簡化</h3>
<?php
$year = 1972;
echo "年=>" . $year . "<br>";

if ($year % 4 != 0) {echo "這是平年";} else if ($year % 100 != 0) {echo "這是閏年";} else if ($year % 400 != 0) {echo "這是平年";} else {echo "這是閏年";}
?>



<h3>閏年極致精簡版</h3>
<?php
$year = 2645;
echo "年=>" . $year . "<br>";

if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {echo "這是閏年";} else {echo "這是平年";}
?>



<h3>閏年不指定年分極簡版</h3>
<?php
$year = mt_rand(1900, 2200);
echo $year . "年";

if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
    echo "閏年";
} else {
    echo "平年";
}
?>