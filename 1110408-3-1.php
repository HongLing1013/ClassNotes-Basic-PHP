<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
</head>
<body>

<div>
        <a href="index.php">回目錄</a>
</div>
    
<h1>九九乘法表</h1>

<style>
    table{
        color: blue;
        border: 1px solid black;
    }
    td{
        border: 1px solid gray;
        padding: 5px 10px;
    }
    td:nth-child(2n){
        background-color : lightblue; /*最接近內容所以td優先tr*/
    }
    tr:nth-child(2n){
        background-color : lightgrey;
    }
    </style>

<h3>手打</h3>

<table>
    <tr>
        <td>1x1=1</td>
        <td>1x2=2</td>
        <td>1x3=3</td>
        <td>1x4=4</td>
        <td>1x5=5</td>
        <td>1x6=6</td>
        <td>1x7=7</td>
        <td>1x8=8</td>
        <td>1x9=9</td>
    </tr>
    <tr>
        <td>2x1=2</td>
        <td>2x2=4</td>
        <td>2x3=6</td>
        <td>2x4=8</td>
        <td>2x5=10</td>
        <td>2x6=12</td>
        <td>2x7=14</td>
        <td>2x8=16</td>
        <td>2x9=18</td>
    </tr>
    <tr>
        <td>3x1=3</td>
        <td>3x2=6</td>
        <td>3x3=9</td>
        <td>3x4=12</td>
        <td>3x5=15</td>
        <td>3x6=18</td>
        <td>3x7=21</td>
        <td>3x8=24</td>
        <td>3x9=27</td>
    </tr>
    <tr>
        <td>4x1=4</td>
        <td>4x2=8</td>
        <td>4x3=12</td>
        <td>4x4=16</td>
        <td>4x5=20</td>
        <td>4x6=24</td>
        <td>4x7=28</td>
        <td>4x8=32</td>
        <td>4x9=36</td>
    </tr>
    <tr>
        <td>5x1=5</td>
        <td>5x2=10</td>
        <td>5x3=15</td>
        <td>5x4=20</td>
        <td>5x5=25</td>
        <td>5x6=30</td>
        <td>5x7=35</td>
        <td>5x8=40</td>
        <td>5x9=45</td>
    </tr>
    <tr>
        <td>6x1=6</td>
        <td>6x2=12</td>
        <td>6x3=18</td>
        <td>6x4=24</td>
        <td>6x5=30</td>
        <td>6x6=36</td>
        <td>6x7=42</td>
        <td>6x8=48</td>
        <td>6x9=54</td>
    </tr>
    <tr>
        <td>7x1=7</td>
        <td>7x2=14</td>
        <td>7x3=21</td>
        <td>7x4=28</td>
        <td>7x5=35</td>
        <td>7x6=42</td>
        <td>7x7=49</td>
        <td>7x8=56</td>
        <td>7x9=63</td>
    </tr>
    <tr>
        <td>8x1=8</td>
        <td>8x2=16</td>
        <td>8x3=24</td>
        <td>8x4=36</td>
        <td>8x5=40</td>
        <td>8x6=48</td>
        <td>8x7=56</td>
        <td>8x8=64</td>
        <td>8x9=72</td>
    </tr>
    <tr>
        <td>9x1=9</td>
        <td>9x2=18</td>
        <td>9x3=27</td>
        <td>9x4=36</td>
        <td>9x5=45</td>
        <td>9x6=54</td>
        <td>9x7=63</td>
        <td>9x8=72</td>
        <td>9x9=81</td>
    </tr>
</table>
<hr>



<h3>簡化</h3>

<style>
    table{
        color: blue;
        border: 1px solid black;
        /*border-collapse: collapse; 把線框合併*/
    }
    td{
        border: 1px solid gray;
        padding: 5px 10px;
    }
    </style>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
echo "<tr>";
for($j=1;$j<=9;$j++){
    echo "<td>{$i}x{$j}=";
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo"</table>";
echo"<hr>";?>



<h3>設定style</h3>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
    if($i%2==0){
        echo "<tr style='background:lightyellow'>";
    }else{
        echo "<tr>";
    }

for($j=1;$j<=9;$j++){
    if($j%2==0){
        echo "<td style='background:lightcyan'>{$i}x{$j}=";
        echo $i*$j;
        echo "</td>";
    }else{
        echo "<td>{$i}x{$j}=";
        echo $i*$j;
        echo "</td>";
    }
}
echo "</tr>";
}
echo"</table>";

echo"<hr>";?>



<h3>設定style簡化</h3>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
    if($i%2==0){
        echo "<tr style='background:lightgary'>";
    }else{
        echo "<tr>";
    }

for($j=1;$j<=9;$j++){
    if($j%2==0){
        echo "<td style='background:lightyellow'>{$i}x{$j}=";
    }else{
        echo "<td>{$i}x{$j}=";
    }
    echo $i*$j;
    echo "</td>";//把一樣的放在判斷式外
}
echo "</tr>";
}
echo"</table>";

echo"<hr>";?>



<h3>設定style更簡化</h3>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
    if($i%2==0){
        echo "<tr style='background:lightgreen'>";
    }else{
        echo "<tr>";
    }

for($j=1;$j<=9;$j++){
    if($j%2==0){
        echo "<td style='background:lightgray'>";
    }else{
        echo "<td>";
    }
    echo "{$i}x{$j}=";//一樣的可以再拉出來個別顯示
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo"</table>";

echo"<hr>";?>



<h3>方向交換</h3>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
    if($i%2==0){
        echo "<tr style='background:lightpink'>";
    }else{
        echo "<tr>";
    }
for($j=1;$j<=9;$j++){
    if($j%2==0){
        echo "<td style='background:lightyellow'>";
    }else{
        echo "<td>";
    }
    echo "{$j}x{$i}=";//兩個參數交換就可以方向交換
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo"</table>";

echo"<hr>";
?>



<h3>只有交界欄位變色</h3>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
        echo "<tr>";
for($j=1;$j<=9;$j++){
    if($j%2==0 && $i%2==0){//這兩個條件都達成時變色
        echo "<td style='background:purple'>";
    }else{
        echo "<td>";
    }
    echo "{$j}x{$i}=";
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo"</table>";

echo"<hr>";?>



<h3>斜線變色</h3>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
        echo "<tr>";
for($j=1;$j<=9;$j++){
    if($i==$j){//******
        echo "<td style='background:hotpink'>";
    }else{
        echo "<td>";
    }
    echo "{$j}x{$i}=";
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo"</table>";

echo"<hr>";?>



<h3>單格變色</h3>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
        echo "<tr>";
for($j=1;$j<=9;$j++){
    if((($i-1)*9+$j)==30){//可用在日曆製作

        /*直航($i)有9列+橫行($j)座標為30
        1  2  3  4  5  6  7  8  9
        10 11 12 13 14 15 16 17 18
        19 20 21 22 23 24 25 26 27
        28 29 30
        故 變色的位子在30的位子*/
        echo "<td style='background:red'>";
    }else{
        echo "<td>";
    }
    echo "{$j}x{$i}=";
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo"</table>";

echo"<hr>";?>



<h3>梯形</h3>

<?php

echo"<table>";
for($i=1;$i<=9;$i++){
        echo "<tr>";
for($j=1;$j<=$i;$j++){
    if($i==$j){//用在車站價目表上
        echo "<td style='background:hotpink'>";
    }else{
        echo "<td>";
    }
    echo "{$j}x{$i}=";
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo"</table>";

echo"<hr>";?>
</body>
</html>