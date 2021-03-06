<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列反轉</title>
</head>
<body>
    
<div>
    <a href="index.php">回目錄</a>
</div>

<h2>陣列反轉的錯誤示範</h2>
<pre>
例：$a=[2,4,6,1,8]    反轉後    $a=[8,1,6,4,2]
</pre>
<?php
$a=[2,4,6,1,8];

for($i=0;$i<count($a);$i++){
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
    echo"$i => [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";
}//他跑完會把結果換回來
?>


<h2>陣列反轉</h2>
<?php
$a=[2,4,6,1,8];

for($i=0;$i<ceil(count($a)/2);$i++){//取天花板在一半時停下
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
    echo"$i => [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";
}
?>



<h2>用PHP函式再次反轉</h2>

<?php
$a=[2,4,6,1,8];

for($i=0;$i<ceil(count($a)/2);$i++){
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
    echo"$i => [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";
}
print_r(array_reverse($a));//反轉的函式
?>
</body>
</html>