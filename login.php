<?php
include('sql.php');
session_start();
if(isset($_POST['sign_in'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (strlen($email)==0){
        echo "<script>alert('Enter Email ID')</script>";
    }else if(strlen($pass)==0){
        echo "<script>alert('Enter Password')</script>";
    }else{
        $query = "SELECT * from login where email='$email' and password='$pass'";
        $row = mysqli_query($conn, $query);
        if(mysqli_num_rows($row)>0){
          // echo "<script>alert('Logged in')</script>";
          $_SESSION['username']=$email;
          header('Location: index.php');
        }else{
            echo "<script>alert('Wrong Email or Password')</script>";
        }
    }
}elseif(isset($_POST['register'])){
  header('Location: register.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="icon" type="image/ico" href="images/logo.png" />
  <link rel="stylesheet" href="css/booking_form.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="validation.js"></script> -->
</head>
<body>
	
<div class="wrapper">
  <form class="login-form" method="post" style="height: 100%">
    <div class="input-fields">
      <h1 align="center" style="color: #c5ecfd">Login</h1>
      <span align="center" style="margin-top: 22px;color: red" id="message"></span>
      <input type="text" class="input" id="email" name="email" placeholder="Username/Email">
      <input type="password" class="input" id="password" name="password" placeholder="Password">
      <!-- <input type="password" class="input" id="num" placeholder="Confirm Password"> -->
      <button class="btn" name="sign_in">Sign in</button>
      <br>
      <button class="btn" name="register">Register</button>
    </div>
</form>
</div>	


</body>
</html>