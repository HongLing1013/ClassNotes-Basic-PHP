<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>製作簡易月曆</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table td{
            padding: 5px;
            text-align: center;
            border: 1px solid #aaa;
        }
    </style>
</head>
<body>

    <div>
        <a href="index.php">回目錄</a>
    </div>

    <h1>製作簡易月曆</h1>
    <?php
    $month=4;    
    ?>

    <table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
    <?php
    for($i=0;$i<6;$i++){
        echo "<tr>";
        
        for($j=0;$j<7;$j++){
            echo "<td>";
            echo $i;
            echo "</td>";
        }
        echo "</tr>";
    }
    
    ?>

    </table>
   
</body>
</html>