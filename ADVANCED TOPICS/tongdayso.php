<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $arr = $_POST['dayso'];
            $sum = array_sum(explode(",",$arr));
            var_dump($sum);
        }
    ?>
    <form action="" method="post">
        <table style="background: #9aff9a">
            <tr style="background: green">
                <th colspan="2" style="color: white">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
            </tr>
            <tr>
                <td>Nhập dãy số: </td>
                <td>
                    <input type="text" name="dayso" size="20" value="<?php 
                        if(isset($arr)) echo $arr;
                    ?>" required>
                    <span style="color: red;">(*)</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" size="20" value="Tổng dãy số" style="background: yellow">
                </td>
            </tr>
            <tr>
                <td>Tổng dãy số: </td>
                <td>
                    <input style="color: red; background: greenyellow" type="text" name="sum" size="20" value="<?php 
                        if(isset($sum)) echo $sum;
                    ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span style="color: red;">(*)</span>
                    Các số được nhập cách nhau bằng dấu ","
                </td>
            </tr>
        </table>
    </form>
</body>
</html>