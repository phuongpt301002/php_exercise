<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="user" value=""><br>
        Password: <input type="password" name=""><br>
        <input type="submit" name="submit" value="Kiểm tra">

        <?php
        if(isset($_POST['submit']))
            if ($_POST['user'] == "admin" and $_POST['pass'] == '12345')
                echo "welcome, admin";
            else 
                echo "Wrong";
        ?>
    </form>
</body>
</html>