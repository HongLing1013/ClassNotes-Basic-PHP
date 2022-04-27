<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>交換變數</title>
</head>
<body>
   
<div>
        <a href="index.php">回目錄</a>
</div>

<h3>交換變數</h3>
<?php
$a=50;
$b=100;

$tmp=$a;
$a=$b;
$b=$tmp;

echo 'a='.$a;
echo"<br>";
echo 'b='.$b;?>
</body>
</html>