<h3>測試質數</h3>

<?php
/*一個質數(Prime)是一個大於1，
且無法找到除了自己本身和1之外的自然數能整除它的自然數*/
$n=8;
$sqrt=ceil(sqrt($n));//函數=天花板(浮點(N))
$test=false;
for($i=2;$i<=$sqrt;$i++){
    if($n%$i==0){
        $test=true;
    }
}

if($test==true){
    echo $n .'不是一個質數' ;
}else{
    echo $n .'是一個質數' ;
}
echo "<hr>";
?>



<h3>測試質數 更快的方法</h3>
<?php
$n=59;
$sqrt=ceil(sqrt($n));
$test=false;
for($i=2;$i<=$sqrt;$i++){
    if($n%$i==0){
        echo $n . '不是一個質數';
        break;
    }else{
        echo $n . '是一個質數';
        break;
    }
}
echo "<hr>";
?>



<h3>測試質數 更省效能的方法</h3>
<?php
$n=80;
$sqrt=ceil(sqrt($n));
$test=true;
for($i=2;$i<=$sqrt;$i++){
    if($n%$i==0){
        $test=false;
        break;
    }
}
echo $n;
echo ($test==true)?'是一個質數':'不是一個質數';
echo "<hr>";
?>



<h3>測試100以內的質數 => 3,5,7,11,13,17...97</h3>
<?php
$n=100;
for($j=3;$j<$n;$j++){
    $test=true;
    $sqrt=ceil(sqrt($j));
    for($i=2;$i<=$sqrt;$i++){
        if($j%$i==0){
            $test=false;
            break;
        }
    }
    if($test==true){
        echo $j.',';
    }
}
echo "<hr>";
?>