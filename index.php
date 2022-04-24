<h1>畫星星</h1>

<style>
*{font-family: 'Courier New', Courier, monospace;}
</style>

<?php
echo"<table>";
for($i=1;$i<9;$i++){
    echo"<tr>";
    for($j=1;$j<9;$j++){
        if($j<$i){
            echo"&nbsp";
        }else{
            echo"<td>";
            echo"*";
            echo"</td>";
        }
    }
    echo"</tr>";
}
echo"</table>";
?>