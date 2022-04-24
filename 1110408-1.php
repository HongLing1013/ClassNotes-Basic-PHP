<h3>while</h3>
<?php
$i = 1;
while ($i < 100) { //i會停在100
    echo $i;
    $i = $i + 1;
}

echo $i;
echo "<hr>";
?>



<h3>while版九九乘法表</h3>
<?php
$j = 1;
while ($j <= 9) {
    $i = 1;
    while ($i <= $j) {
        echo "{$i}x{$j}=" . ($i * $j) . " ";
        $i++;}
    echo "";
    $j++;
}
?>



<h3>do...while</h3>
<?php
/*do...while用在登入系統的判斷
還有以前dreamwaver的迴圈
以及資料庫的存取
 */
$i = 1; //不論i的值是多少都先做一遍
do {echo $i;
    $i = $i + 1; //這個條件就算不符合規範也會繼續跑
} while ($i < 100);
echo "<hr>";
?>



<h3>do...while版九九乘法表</h3>
<?php
$j = 1;
do {$i = 1;
    do {
        echo "{$i}x{$j}=" . ($i * $j) . " ";
        $i++;
    } while ($i <= $j);
    echo "";
    $j++;
} while ($j <= 9);
?>



<h3>do...while跟while的差別</h3>
<?php
echo "while發現數的條件不符就會停止,可do...while就算不符合也會先跑完一次";
echo "<br>";
echo "windows最早期就是用while";
echo "<br>";
echo "寫遊戲也大多是用while當起手式";
echo "<br>";
echo "<hr>";
?>



<h3>巢狀控制</h3>
<?php
//一般建議不要超過3層
//如果寫得不好會有很多無效迴圈空轉
?>
