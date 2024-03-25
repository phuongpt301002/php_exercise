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
    if (isset($_GET['submit'])){
        $p1 = $_GET['pass']; 
        $p2 = $_GET['repass'];
        $name = $_GET['name'];
        $user = $_GET['user'];
        $email = $_GET['email'];
        $sex = $_GET['sex'];
        $msg = "";
        if(!empty($p1) and !empty($p2)){
            if($p1 == $p2) 
                $msg = "Thank $name $email $user $sex";
            else $msg = "Incorrect confirm password";
        } else $msg = "Password can not be blank!!!!";
    }
    ?>
    <form method="get">
        <h3>Registration</h3>
        <table>
        <tr>
            <td>Full Name<br>
            <input type="text" name="name" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['name'])) 
                echo $_GET['name'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['name']))
            echo "yeu cau ko dc de trong";
        ?>">
            </td>
            <td>
                Username<br>
                <input type="text" name="user" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['user'])) 
                echo $_GET['user'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['user']))
            echo "yeu cau ko dc de trong";
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
            echo "yeu cau ko dc de trong";
        ?>">
            </td>
            <td>
                Phone Number<br>
                <input type="text" name="phone" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['phone'])) 
                echo $_GET['phone'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['phone']))
            echo "yeu cau ko dc de trong";
        ?>">
            </td>
        </tr>
        <tr>
            <td>Password<br>
            <input type="password" name="pass" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['pass'])) 
                echo $_GET['pass'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['pass']))
            echo "yeu cau ko dc de trong";
        ?>">
        </td>
        <td>Confirm Password<br>
            <input type="password" name="repass" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['repass'])) 
                echo $_GET['repass'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['repass']))
            echo "yeu cau ko dc de trong";
        ?>">
        </td>
        <tr>
            <td>
                Gender<br>
                <input type="radio" name="sex" value="Male"> Male
                <input type="radio" name="sex" value="Female" checked> Female
                <input type="radio" name="sex" value="None"> Prefer not to say
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Register" class="submit-button">
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