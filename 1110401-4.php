<h3>迴圈</h3>
<?php
for ($i = 0; $i < 10; $i++)
{echo ($i * 10) . "<br>";}
echo"<hr>"
?>



<h3>奇數</h3>
<?php
for ($i = 0; $i < 10; $i=$i+2)
{echo ($i * 10) . "<br>";}
echo"<hr>"
?>



<h3>只會i++寫奇數</h3>
<?php
for($i=1;$i<=50;$i++)
{echo"第".$i."次迴圈 => ";
if($i%2==1){echo $i."<br>";}}//用一百次迴圈得出答案太浪費時間
echo "<hr>";
?>



<h3>求奇數精簡版</h3>
<?php
for($i=1;$i<=50;$i=$i+2){echo $i.",";}//這樣比較有效率
echo "<hr>";
?>



<h3>精簡版改成求偶數</h3>
<?php
for($i=2;$i<=50;$i=$i+2){echo $i.",";}//這樣比較有效率
echo "<hr>";
?>



<h3>機車面試官填空格版本</h3>
<?php
for($i=1;$i<=50;$i=$i+2){echo ($i+1).",";}
echo "<hr>";
?>