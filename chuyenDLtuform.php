<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_GET['submit'])){
        $name = $_GET['name']; 
        $ho = $_GET['ho'];
        $address = $_GET['address'];
        $ID_class = $_GET['ID_class'];
        $msg = "";
        if(!empty($name) and !empty($ho) and !empty($address) and !empty($ID_class)){
            if(!is_numeric($name) and !is_numeric($ho) and !is_numeric($address)){
                $msg = "New record created successfully";
            } else $msg =  "Họ, tên, địa chỉ phải là chữ";
        } else $msg = "Vui lòng nhập đủ thông tin";
    }
    ?>
<form method="get">
        <table style="background: beige;">
            <tr style="background: yellow">
                <th colspan="2">
                    NHẬP THÔNG TIN SINH VIÊN
                </th>
            </tr>

            <tr>
                <td>Tên</td>
                <td>
                    <input type="text" name="name"  size="20" value="<?php
                    if(isset($name)) echo $name;
                    ?>">
                </td>
            </tr>

            <tr>
                <td>Họ</td>
                <td>
                    <input type="text" name="ho" size="20" value="<?php
                    if(isset($ho)) echo $ho;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>Địa chỉ</td>
                <td>
                    <input type="text" name="address" size="20" value="<?php
                    if(isset($address)) echo $address;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>ID của lớp</td>
                <td>
                    <input type="text" name="ID_class" size="20" value="<?php
                    if(isset($ID_class)) echo $ID_class;

                    ?>">
                </td>
            </tr>

            <tr>
                <td  style="text-align: center" >
                    <input type="submit" name="submit" value="Gửi">
                </td>

                <td  style="text-align: center">
                    <input type="submit" name="delete" value="Xóa">
                </td>

                <td  style="text-align: center">
                    <input type="submit" name="Xem" value="Xem Kết Quả">
                </td>
                
            </tr>

            <tr>
                <th colspan="2" style="color: red">
                <?php
                    if(isset($msg)) echo $msg;
                ?>
            </tr>

        </table>
    </form>
</body>
</html>