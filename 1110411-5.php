<h2>利用程式來產生陣列-九九乘法表</h2>
<?php
$nine=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j = " . ($i*$j);
    }
}

echo "<pre>";//讓它呈現出來確定有沒有打錯
print_r($nine);
echo "</pre>";
?>



<h2>陣列版九九乘法表的呈現</h2>
<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j = " . ($i*$j);
    }
}

for($i=0;$i<count($nine);$i++){//count可以計數陣列裡面的東西
    if($i%9==0){
        echo "<br>";
    }//由於結果會太雜亂所以給他段行再echo
    echo $nine[$i]."&nbsp;&nbsp;";
}
?>



<h2>利用程式來產生陣列-九九乘法表-2</h2>
<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine["{$i}x{$j}"]=$i*$j;
    }
}

echo "<pre>";
print_r($nine);
echo "</pre>";
?>



<h2>陣列版九九乘法表的呈現-2</h2>
<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine["{$i}x{$j}"]=$i*$j;
    }
}

$i=8;
$j=7;
echo "$i x $j=";
echo $nine["{$i}x{$j}"];
?>