<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>子字串的應用</title>
</head>
<body>

<div>
    <a href="index.php">回目錄</a>
</div>

    <h1>子字串的應用</h1>
    <article>
        <h3>子字串的應用</h3>
    </article>
    <div>將"The reason why a great man is great is that he resolves to be a great man"只取前十字成為"The reason..."</div>

<?php

$str="The reason why a great man is great is that he resolves to be a great man";

echo "<br>";
echo "第一種方法:<br>";
$newStr=substr($str,0,10);//把$str這個字算從0開始算取10個字元
//字串起始位子跟陣列一樣都是從0開始算
echo $newStr . "..." ;
echo "<hr>";

echo "第二種方法:<br>";
$newStr2=mb_substr($str,0,10);//substr有差異的話會是中文
echo $newStr2 . "...<hr>";

?>

<h3>用中文try</h3>

<?php
$str2="有志者事竟成";//中文字3字元=1個字
echo "<br>";

echo "第一種方法:<br>";
$newStr3=substr($str2,0,12);
echo $newStr3 . "...<hr>";

echo "第二種方法:<br>";
$newStr4=mb_substr($str2,0,12);//字串的東西建議用mb系列
echo $newStr4 . "...<hr>";
?>

</body>
</html>
