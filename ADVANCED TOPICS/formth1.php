<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .submit-button {
            width: 100%;
        }
    </style>
</head>
<body>
<?php
        if(isset($_GET['submit'])){
            $email = $_GET['email'];
            $password=$_GET['password']; $confirmPassword=$_GET['password'];
            if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)){
                if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W]).{8,}$/", $password)){
                    if($password === $confirmPassword){
                        $msg= "";
                    }
                    else $msg = "(*)Xác nhận mật khẩu không khớp";
                }
                else $msg = "(*)Mật khẩu phải chứa ít nhất 8 ký tự <br> bao gồm chữ hoa, chữ thường, chữ số và ký tự đặc biệt";
            }
            else 
            {
                $errorEmail = "(*)Email không hợp lệ";
                if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W]).{8,}$/", $password)){
                    if($password === $confirmPassword){
                        $msg= "";
                    }
                    else $msg = "(*)Xác nhận mật khẩu không khớp";
                }
                else $msg = "(*)Mật khẩu phải chứa ít nhất 8 ký tự <br> bao gồm chữ hoa, chữ thường, chữ số và ký tự đặc biệt";
            }
        }
    ?>
    
    <form method="get">
        <h3>Registration</h3>
        <table>
        <tr>
            <td>Full Name<br>
            <input type="text" name="fullname" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['fullname'])) 
                echo $_GET['fullname'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['fullname']))
            echo "Yeu cau khong de trong";
        ?>">
            </td>
            <td>
                Username<br>
                <input type="text" name="username" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['username'])) 
                echo $_GET['username'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['username']))
            echo "Yeu cau khong de trong";
        ?>">
            </td>
        </tr>
        <tr>
            <td>Email<br>
            <input type="text" name="email" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['email'])) 
                echo $_GET['email'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['email']))
            echo "Yeu cau khong de trong";
        ?>">
            </td>
            <td>
                Phone Number<br>
                <input type="text" name="phone" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['phone'])) 
                echo $_GET['phone'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['phone']))
            echo "Yeu cau khong de trong";
        ?>">
            </td>
        </tr>
        <tr>
            <td>Password<br>
            <input type="password" name="password" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['password'])) 
                echo $_GET['password'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['password']))
            echo "Yeu cau khong de trong";
        ?>">
        </td>
        <td>Confirm Password<br>
            <input type="password" name="password" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['password'])) 
                echo $_GET['password'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['password']))
            echo "Yeu cau khong de trong";
        ?>">
        </td>
        <tr>
            <td>
                Gender<br>
                <input type="radio" name="gender" value="nam"> Male
                <input type="radio" name="gender" value="nu" checked> Female
                <input type="radio" name="gender" value="not"> Prefer not to say
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Register" class="submit-button">
            </td>
        </tr>
        <tr>
            <td style="text-align: center; color: red" colspan="2">
                <?php
                    if(isset($msg)) echo $msg;
                ?>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; color: red" colspan="2">
                <?php
                    if(isset($errorEmail)) echo $errorEmail;
                ?>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>