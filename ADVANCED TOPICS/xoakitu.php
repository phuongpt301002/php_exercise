<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa kí tự tại 1 vị trí cho trước</title>
</head>
<body>
<?php
$str = "Hello, World!";
$position = 7; // Vị trí của ký tự cần xóa
echo $str;
echo "<br>";
if ($position >= 0 && $position < strlen($str)) {
    $str = substr_replace($str, '', $position, 1);
    echo $str; // Kết quả: Hello, orld!
} else {
    echo "Vị trí không hợp lệ!";
}
// function remove_char($s,$index){
//     $temp = "";
//     for($i=0; i<=)
//}
?>
</body>
</html>