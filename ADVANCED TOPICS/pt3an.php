<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liệt kê nghiệm nguyên không âm của X+Y+Z=1000</title>
</head>
<body>
    <?php
    for ($x = 0; $x <= 1000; $x++) {
        for ($y = 0; $y <= 1000; $y++) {
            $z = 1000-($x + $y);
    
            if ($z >= 0) {
                echo "Các nghiệm là : X = $x, Y = $y, Z = $z" . PHP_EOL;
                echo "<br>";
            }
        }
    }
    ?>
</body>
</html>