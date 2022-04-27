<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串函式整合應用</title>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>
    <!-- 回首頁的標籤 -->


    <h1>字串函式整合應用</h1>
    <article>
        <h3>尋找字串與HTML、CSS整合應用</h3>

        <div>給定一個句子，將指定的關鍵字放大
            "學會PHP網頁程式設計，薪水加倍，工作會好找"
            請將上句中的＂程式設計＂放大字型或變色</div>
            <hr>
    </article>

<?php
$str="學會PHP網頁程式設計，薪水加倍，工作會好找";
echo "<hr><hr>";

echo "方法一:<br>直接echo加入style<br>";
echo "學會PHP網頁<span style='font-size:2rem;color:red'>程式設計</span>，薪水加倍，工作會好找<hr>";
?>

<?php
echo "方法二:<br>找到字串後把它取代掉<br>";//這個比較快
echo "<br>";

$pos=mb_strpos($str,"程式設計");//找到字串在句中出現的位子,前方是字串後面是要找的對象
$str=mb_substr($str,0,$pos) . "<span style='font-size:2rem;color:red'>"."程式設計</span>薪水加倍，工作會好找<hr>";
//要取的位子是前一個字的長度,會回一個字串 所以可以把這函式當字串處理 所以可以在後面直接打上要打的字
echo $str;
?>

<?php
echo "方法三<br>";
$str="學會PHP網頁程式設計，薪水加倍，工作會好找";
echo "<br>";

$search="程式設計";//把要找的字串拉出來

$pos=mb_strpos($str,$search);
$str=mb_substr($str,0,$pos) 
. "<span style='font-size:2rem;color:red'>"
. $search 
. "</span>"
."薪水加倍，工作會好找";
echo $str."<hr>";
?>

<?php
echo "方法四:<br>如果把每個字串都拆開";//最終的做法
$str="學會PHP網頁程式設計，薪水加倍，工作會好找";
echo "<br>";
$search="程式設計";
$pos=mb_strpos($str,$search);
$head=mb_substr($str,0,$pos);
$tail=mb_substr($str,$pos+mb_strlen($search));
$str=$head 
. "<span style='font-size:2rem;color:red'>"
. $search 
. "</span>"
.$tail;
echo $str."<hr>";
?>

<?php
echo "方法五:<br>如果用長度去算";//其他方式參考
$str="學會PHP網頁程式設計，薪水加倍，工作會好找";
echo "<br>";
$search="程式設計";
$pos=mb_strpos($str,$search);
$head=mb_substr($str,0,$pos);
$tail_len=mb_strlen($str)-mb_strlen(mb_substr($str,0,$pos))-mb_strlen($search);
$tail=mb_substr($str,$pos+mb_strlen($search),$tail_len);
$str=$head 
. "<span style='font-size:2rem;color:red'>"
. $search 
. "</span>"
.$tail;
echo $str;
?>


</body>
</html>