<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈畫星星-三角形與菱形</title>
</head>
<body>

<div>
    <a href="index.php">回目錄</a>
</div>

<h1>畫星星</h1>

<style>
    *{font-family:'Courier New', Courier, monospace
    }
</style>

<h3>直角三角形</h3>

<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>



<h3>倒直角三角形</h3>

<?php

for($i=0;$i<5;$i++){
    for($j=5;$j>$i;$j--){
        echo "*";
    }
    echo "<br>";
}

?>



<h3>正三角形</h3>

<?php

for($i=0;$i<5;$i++){
    switch($i){
        case 0: echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        break;
        case 1: echo "&nbsp;&nbsp;&nbsp;";
        break;
        case 2: echo "&nbsp;&nbsp;";
        break;
        case 3: echo "&nbsp;";
        break;
    }
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    echo "<br>";
}

?>



<h3>正三角形的另一個方法...+空格</h3>

<?php

for($i=0;$i<5;$i++){
    for($k=4;$k>$i;$k--){
        echo "&nbsp;";//加入空格
    }
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    echo "<br>";
}

?>



<h3>倒正角三角形</h3>

<?php

for($i=0;$i<6;$i++){

    for($k=0;$k<$i;$k++){
        echo "&nbsp";
    }
    for($j=7;$j>($i*2);$j--){
        echo "*";
    }
    echo "<br>";
}

?>



<h3>湊出一個菱形</h3>

<?php
for($i=0;$i<6;$i++){
    for($k=4;$k>=$i;$k--){
        echo "&nbsp;";
    }
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    echo "<br>";
}//一個正三角
for($i=0;$i<6;$i++){

    for($k=0;$k<=$i;$k++){
        echo "&nbsp";
    }
    for($j=9;$j>($i*2);$j--){
        echo "*";
    }
    echo "<br>";
}//一個倒三角形

?>



<h3>菱形簡化成if...else</h3>

<?php
for($i=0;$i<11;$i++){
    
    if($i<6){
    for($k=5;$k>$i;$k--){
        echo "&nbsp;";
    }
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    
    }else{

        for($k=0;$k<($i-5);$k++){
            echo "&nbsp";
        }
        for($j=((11-$i)*2-1);$j>0;$j--){
            echo "*";
        }
    }
    echo "<br>";
}

?>
</body>
</html>