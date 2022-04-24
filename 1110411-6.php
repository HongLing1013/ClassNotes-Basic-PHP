<h2>威力彩號-隨機產生號碼</h2>
<?php
//random的簡寫,產生亂數
echo "<h3>第一區</h3>";
echo rand(1,38) . ',';
echo rand(1,38) . ',';
echo rand(1,38) . ',';
echo rand(1,38) . ',';
echo rand(1,38) . ',';
echo rand(1,38) . ',';
echo "<h3>第二區</h3>";
echo rand(1,8);
//但是這個方法會有重複的數字
?>

<h2>威力彩號-用陣列顯示且避免重複</h2>
<?php
echo "<h3>第一區</h3>";
$lotto=[];
while(count($lotto)<6){
    $num=rand(1,38);
    if(!in_array($num, $lotto)){
        $lotto[]=$num;
    }
}
echo"<pre>";
print_r($lotto);
echo"</pre>";
echo "<h3>第二區</h3>";
echo rand(1,8);
?>

<h2>威力彩號-把數字顯示出來</h2>
<?php
echo "<h3>第一區</h3>";
$lotto=[];
while(count($lotto)<6){
    $num=rand(1,38);
    if(!in_array($num, $lotto)){
        $lotto[]=$num;
    }
}
for($i=0;$i<count($lotto);$i++){
    echo $lotto[$i].",";
}
echo "<h3>第二區</h3>";
echo rand(1,8);
?>

<h2>威力彩號-照數字大小排序</h2>
<?php
echo "<h3>第一區</h3>";
$lotto=[];
while(count($lotto)<6){
    $num=rand(1,38);
    if(!in_array($num, $lotto)){
        $lotto[]=$num;
    }
}
echo "開出順序:";
for($i=0;$i<count($lotto);$i++){
    echo $lotto[$i].",";
}
echo "<br>大小順序:";
sort($lotto);//照順序大小排序陣列
for($i=0;$i<count($lotto);$i++){
    echo $lotto[$i].",";
}
echo "<h3>第二區</h3>";
echo rand(1,8);
?>