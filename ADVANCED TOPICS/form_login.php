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
            session_start();
            $servername = "localhost";
            $user = $_POST['email'];
            $usrpassword = $_POST['rpsw'];
            include "formphp.php";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if(!$conn){
                die("Connection failed: ". mysqli_connect_error());
            }
            $query = "SELECT * FROM 'users'";
            $result = mysqli_query($conn,$query);
            if(!$result) die ('<br> <b>Query failed</b>');
            if(mysqli_num_rows($result) != 0){
                while ($row = mysqli_fetch_array($result)){
                    if($row['email'] == $user and password_verify($usrpassword, $row['psw'])){
                        $_SESSION['uname'] = $user;
                        header("Location: ./welcome.php");
                        break;
                    }
                }
            }
        }
    ?>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Your name</b></label>
    <input type="text" placeholder="Enter Your name" name="uname" required>

    <label for="e_mail"><b>Your email</b></label>
    <input type="text" placeholder="Enter Your email" name="e_mail" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="rpsw"><b>Repeat your passwword</b></label>
    <input type="password" placeholder="Enter Repeat Password" name="rpsw" required>

        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>