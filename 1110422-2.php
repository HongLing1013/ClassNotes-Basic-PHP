<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串分割</title>
</head>
<body>

<div>
    <a href="index.php">回目錄</a>
</div>
    <h1>字串分割</h1>
    <article>
        <h3>字串分割</h3>
    <div>將"this,is,a,book"依","切割後成為陣列</div>
    </article>

<?php
$str="this,is,a,book";
$array=explode(",",$str);//用","切割字串

echo "<pre>";
print_r($array);
echo "</pre>";
?>

</body>
</html>