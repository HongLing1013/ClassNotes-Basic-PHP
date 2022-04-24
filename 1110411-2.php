<style>
    *{font-family:'Courier New', Courier, monospace
    }
</style>

<h3>矩形</h3>

<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        echo "*";
    }
    echo "<br>";
}
?>



<h3>空的矩形</h3>

<?php
for($i=0;$i<5;$i++){
    if($i==0 || $i==4){
        for($j=0;$j<5;$j++){
            echo "*";
        }
    }else{
        for($j=0;$j<5;$j++){
            if($j==0 ||$j==4){
                echo "*";
            }else{
                echo "&nbsp;";
        }
    }
}
    echo "<br>";
}
?>



<h3>空矩形簡化</h3>

<?php
for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
            if($i==0 || $i==4){
                    echo "*";
            }else{
                if($j==0 || $j==4){
                    echo "*";
                }else{
                    echo"&nbsp;";
                }
        }
    }
    echo "<br>";
}
?>



<h3>空矩形簡化-把判斷式放到一起</h3>

<?php
for($i=0;$i<5;$i++){

    for($j=0;$j<5;$j++){
    
            if($i==0 || $i==4 || $j==0 || $j==4){
                    echo "*";
            }else{
                    echo"&nbsp;";
                }
        }
    echo "<br>";
}
?>



<h3>空矩形-只要四個角各一顆</h3>

<?php
for($i=0;$i<5;$i++){

    for($j=0;$j<5;$j++){
    
            if(($i==0 || $i==4)&&($j==0 || $j==4)){
                    echo "*";
            }else{
                    echo"&nbsp;";
                }
        }
    echo "<br>";
}
?>



<h3>空矩形裡面畫個X</h3>

<?php
for($i=0;$i<5;$i++){

    for($j=0;$j<5;$j++){
    
            if($i==0 || $i==4 || $j==0 || $j==4 || $i==$j || $j==(4-$i)){
                    echo "*";
            }else{
                    echo"&nbsp;";
                }
        }
    echo "<br>";
}
?>



<h3>空矩形裡面畫個X-用一個變數size把它變大</h3>

<?php
$size=10;
for($i=0;$i<$size;$i++){

    for($j=0;$j<$size;$j++){
    
            if($i==0 || $i==($size-1) || $j==0 || $j==($size-1) || $i==$j || $j==($size-1-$i)){
                    echo "*";
            }else{
                    echo"&nbsp;";
                }
        }
    echo "<br>";
}
?>



<h3>空矩形X-用一個變數size把它變大</h3>

<?php
$size=10;
for($i=0;$i<$size;$i++){

    for($j=0;$j<$size;$j++){
    
            if($i==0 || $i==($size-1) || $j==0 || $j==($size-1) || $i==$j || $j==($size-1-$i)){
                    echo "*";
            }else{
                    echo"&nbsp;";
                }
        }
    echo "<br>";
}
?>