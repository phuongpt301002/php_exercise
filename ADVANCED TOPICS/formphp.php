<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
    <?php  
        if(isset($_POST['submit'])){
            //Check connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_login_form";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(!$conn){
            die("Connection failed: ". mysqli_connect_error());
        }
        $query = "SELECT * FROM 'users'";
        $result = mysqli_query($conn,$query);
        if(!$result) die ('<br> <b>Query failed</b>');
        if(mysqli_num_rows($result) != 0){
            if($row['email'] == $username);
        }
        //Chuẩn bị câu truy vấn
        $options = [
        'cost' => 12 ,
        ];
        $hashedPassword = password_hash ( $plaintextPassword , PASSWORD_DEFAULT , $options );
        $query = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES ('1001', 'phuong123', 'phuong123@gmail.com', 'pjdjdiwdbaka');";

        //Thực thi câu lệnh
        $result =  mysqli_query($conn,$query);
        header('Location: ./successful_message.html');
        }

    ?>

<h2>Login Form</h2>

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
