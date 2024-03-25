<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="input" value="<?php 
        if(isset($_GET['submit'])) 
            if(!empty($_GET['input'])) 
                echo $_GET['input'];?>" 
                placeholder="<?php if(isset($_GET['submit']) and empty($_GET['input']))
            echo "yeu cau ko dc de trong";
        ?>"
        >
        <input type="submit" name="submit">
        <input type="reset" name="reset" value="reset">
        <?php
            if(isset($_GET['reset'])) $_GET['input']="";
        ?>
    </form>
</body>
</html>