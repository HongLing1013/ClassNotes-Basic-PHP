<h3>變數</h3>

<?php
$name="趙妅翎";
$price=500;//中文要加 " 數字不用
$tatal=100*$price;//乘法

echo $name;
echo "<br>";//換行的輸入方式
print ($price); //C語言的工程師比較常用這個方法
echo "<br>";
echo $tatal;
echo "<br>";
echo "<hr>";?>



<h3>if...else的基本</h3>

<?php
$score=50;
echo "成績=".$score;
echo"<br>";

if($score>=60){echo"恭喜你及格了";}//如果 (條件)符合的話 {呈現"這句話"}
else{echo"悲劇";}//否則{呈現"這一句"}
echo "<br>";
echo "<hr>";?>



<h3>if...else的進階</h3>

<?php
$score=50;
echo "成績=".$score;
echo"<br>";

if($score>=100){echo"恭喜滿分";}
else if($score>=80){echo"很棒唷";}
else if($score>=60){echo"及格了";}
else if($score>=40){echo"需要再加油一點唷";}
else if($score>=20){echo"缺少大量的努力";}
else if($score>=0){echo"悲劇";}//可是這個方式會跑很多次會浪費時間
echo "<br>";
echo "<hr>";?>



<h3>switch...case的基本</h3>

<?php
$score=80;
$level='留白';
echo "成績=".$score;
echo"<br>";
if ($score>=85){$level='A';}
else if($score>=60){$level='B';}
else if($score>=30){$level='C';}
else {$level='D';}

switch($level){case "A":echo "表現優良";//switch(此處須輸入一個值,不可以是單純的T或F的東西)
break;case"B":echo"值得肯定";
break;case"C":echo"需要練習";
break;case"D":echo"缺乏基本功";
default:echo"GG";}
echo "<br>";
echo "<hr>";?>



<h3>switch...case的變化</h3>

<?php
$score=57;
echo"成績=".$score;
echo"<br>";
$level=floor($score/25);//取最小值,直接算出來後判斷,速度會較快
echo $level;
echo "<br>";

switch($level){
    case 4://100~
    case 3://75~99
        echo"值得肯定";break;//break代表只要達成條件就會離開不會繼續往後跑
    case 2://50~74
        echo"需要練習";break;
    case 1://25~49
        echo"缺乏基本功";break;
    case 0://0~24
        echo"缺乏基本功";
    default:
        echo"GG";}
echo "<br>";
echo "<hr>";?>

<?php
//二選一用if...else
//多選用switch...case?>



<h3>if...else的其他寫法</h3>
<?php
$score=80;
echo"成績=".$score;
echo"<br>";

if($score>=60){$level='及格';}
else{$level='不及格';}
echo $level;
echo "<hr>";?>



<h3>if...else的簡化</h3>

<?php
$score=58;
echo"成績=".$score;
echo"<br>";

$level=($score>=60)?'及格':'不及格';
echo $level;
echo"<hr>";?>



<h3>極限值</h3>
<?php
$score=1000;
echo "成績=".$score;
echo "<br>";

if($score>100 ||$score<0){$level=5;}
else{$level=floor($score/25);}//數值的判斷很重要,非常必要
echo $level;
echo "<br>";

switch($level){
    case 4:
    case 3:
        echo"值得肯定";break;
    case 2:
        echo "需要練習";break;
    case 1:
        echo"缺乏基本功";break;
    case 0:
        echo"缺乏基本功";break;
    default:
    echo"成績不合理";

echo"<br>";
echo"<hr>";}
?>



<h3>三元運算式</h3>
<?php
$score=50;
echo "成績=".$score;
echo"<br>";
$level=($score>100 || $score<0)? 5 : floor($score/25) ;
//成績=(條件 或者 條件) IF 符合5就直接分類 其他的用 (條件)去分類 

echo $level;
echo"<br>";

switch($level){
    case 4:
    case 3:
        echo"值得肯定";break;
     case 2:
        echo"需要練習";break;
    case 1:
        echo"缺乏基本功";break;
    case 0:
        echo"缺乏基本功";break;
    default:
    echo"成績不合理";

echo"<br>";
echo"<hr>";}
?>