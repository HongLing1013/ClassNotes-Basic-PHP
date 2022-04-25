<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串組合</title>
</head>
<body>
    <h1>字串組合</h1>
    <article>
        <h3>字串組合</h3>
    <div>將"this,is,a,book"依","切割後成為陣列後,
        再從陣列重新組合成"this is a book"
    </div>
    </article>

<?php
$str="this,is,a,book";
$array=explode(",",$str);

echo "<pre>";
print_r($array);
echo "</pre>";//分割陣列完成

echo "<hr>";
echo "方法一:";
echo"<br>";
$newstr=implode("&nbsp",$array);
echo $newstr;

echo "<hr>";
echo "方法二:";
echo"<br>";
$newstr=join(" ",$array);
echo $newstr;

?>

</body>
</html>