<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table>";
    for ($i=1; $i<11; $i++){
        echo "<th>";
        echo "<tr><b>  Chuong $i  </b></tr>";
        
        for ($j=1; $j<11; $j++){
            echo "<td> $i x $j = " . ($i * $j) . "</td>";
      
        }
        echo "</th>";
    }
    echo "</table>";
    ?>
</body>
</html>