<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串取代</title>
</head>
<body>

    <h1>字串取代</h1>
<article>
    <h3>字串取代</h3>
    <div>
        將"aaddw1123"改成"*********"
    </div>
</article>
    <?php
    $password="aaddw1123";
    $password=str_replace("a","*",$password);
    // a=要尋找的對象 *=要取代的對象 $password=要放的目標 
    $password=str_repeat("*",mb_strlen($password));//數字型的字串
    echo $password;
    ?>

    <!-- 如果覺得有點醜 可以改成下面這樣 -->
    <?php
    $password="aaddw1123";
    $strlen=mb_strlen($password);
    $password=str_repeat("*",$strlen);
    echo $password;
    ?>

</body>
</html>