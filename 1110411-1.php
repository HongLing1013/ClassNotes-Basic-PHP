<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>進階菱形</title>

    <style>
    *{font-family:'Courier New', Courier, monospace
    }
</style>

</head>
<body>

<div>
    <a href="index.php">回目錄</a>
</div>

<h3>菱形改城一樣數值-1</h3>

<?php
//上面
for($i=0;$i<11;$i++){
    
    if($i<=((9-1)/2)){
        //印空白
    for($k=((9-1)/2);$k>$i;$k--){
        echo "&nbsp;";
    }
    //印星星
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    }else{
        //印空白
        for($k=0;$k<($i-4);$k++){
            echo "&nbsp";
        }
        //印星星
        for($j=0;$j<((8-$i)*2+1);$j++){
            echo "*";
        }
    }
    echo "<br>";
}//先找關聯性
?>



<h3>菱形改城一樣數值-2</h3>

<?php
//上面
for($i=0;$i<11;$i++){
    
    if($i<=((9-1)/2)){
        //印空白
    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }
    //印星星
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    }else{
        //印空白
        for($k=0;$k<($i-4);$k++){
            echo "&nbsp";
        }
        //印星星
        for($j=0;$j<((8-$i)*2+1);$j++){
            echo "*";
        }
    }
    echo "<br>";
}//改成一樣的++
?>



<h3>菱形改城一樣數值-3</h3>

<?php
//上面
$size=9;
for($i=0;$i<11;$i++){
    
    if($i<=(($size-1)/2)){
        //印空白
    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }
    //印星星
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    }else{
        //印空白
        for($k=0;$k<($i-4);$k++){
            echo "&nbsp";
        }
        //印星星
        for($j=0;$j<(($size-1-$i)*2+1);$j++){
            echo "*";
        }
    }
    echo "<br>";
}//給他一個變數$size
?>



<h3>菱形改城一樣數值-4</h3>

<?php
//上面
$size=21;
for($i=0;$i<$size;$i++){
    
    if($i<=(($size-1)/2)){
        //印空白
    for($k=0;$k<(($size-1)/2-$i);$k++){
        echo "&nbsp;";
    }
    //印星星
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    }else{
        //印空白
        for($k=0;$k<($i-($size-1)/2);$k++){
            echo "&nbsp";
        }
        //印星星
        for($j=0;$j<(($size-1-$i)*2+1);$j++){
            echo "*";
        }
    }
    echo "<br>";
}//將4改成size
?>



<h3>菱形精簡化-1</h3>

<?php
//上面
$size=31;
for($i=0;$i<$size;$i++){
    
    if($i<=(($size-1)/2)){
        $space=($size-1)/2-$i;
        $stars=$i*2+1;
    }else{
        $space=$i-($size-1)/2;
        $stars=($size-$i)*2-1;
    }

    //印空白
    for($k=0;$k<$space;$k++){
    echo "&nbsp";
    }

    //印星星
    for($j=0;$j<$stars;$j++){
    echo "*";
    }
    echo "<br>";
}//把一樣的先抽出來精簡
?>



<h3>菱形-設定奇數值</h3>

<?php
$size=2;
//先判斷是否為奇數
if($size%2==0){
    $size=$size+1;
}
//如果小於3直接設定成3
if($size<3){
    $size=3;
}

for($i=0;$i<$size;$i++){
    
    if($i<=(($size-1)/2)){
        $space=($size-1)/2-$i;
        $stars=$i*2+1;
    }else{
        $space=$i-($size-1)/2;
        $stars=($size-$i)*2-1;
    }

    for($k=0;$k<$space;$k++){
    echo "&nbsp";
    }

    for($j=0;$j<$stars;$j++){
    echo "*";
    }
    echo "<br>";
    }
?>
    
</body>
</html>