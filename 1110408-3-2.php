<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表加標題欄</title>
</head>
<body>

<div>
    <a href="index.php">回目錄</a>
</div>
    
<h1>九九乘法表有標題欄的版本</h1>

<style>
    table{
        color: blue;
        border: 1px solid black;
        border-collapse: collapse;
    }
    td{
        border: 1px solid gray;
        padding: 5px 10px;
    }
    .header{
        background-color : hotpink;
    }
    </style>

<?php

echo"<table>";
for($i=0;$i<10;$i++){
echo "<tr>";
for($j=0;$j<10;$j++){
    if($i==0){
        echo "<td class='header'>$j</td>";//設定了header就不用打那麼長
    }else if($j==0){
        echo "<td class='header'>$i</td>";
    }else{
    echo "<td>";
    echo $i*$j;
    echo "</td>";
    }
}
echo "</tr>";
}
echo"</table>";
echo"<hr>";?>
</body>
</html>