<?php
include('sql.php');
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass1 = $_POST['confirm_password'];
    if (strlen($email)==0){
        echo "<script>alert('Enter Email ID')</script>";
    }else if(strlen($pass)==0){
        echo "<script>alert('Enter Password')</script>";
    }else if($pass!=$pass1){
        echo "<script>alert('Not match')</script>";
    }else{
        $query = "INSERT into login(name,email,password) values('$name','$email','$pass')";
        if(mysqli_query($conn, $query)){
          echo "<script>alert('You are Register')</script>";
          header('Location: login.php');
        }else{
            echo "<script>alert('Invalid data')</script>";
        }
    }
}elseif(isset($_POST['login'])){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="css/booking_form.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="validation.js"></script> -->
</head>
<body>
	
<div class="wrapper">
  <form class="login-form" method='post' style="height: 100%">
    <div class="input-fields">
      <h1 align="center" style="color: #c5ecfd">Register</h1>
      <input type="text" class="input" id="name" name="name" placeholder="Name">
      <input type="text" class="input" id="email" name="email" placeholder="Email Address">
      <input type="password" class="input" id="password" name="password" placeholder="Password">
      <input type="password" class="input" id="password" name="confirm_password" placeholder="Confirm Password">
      <button class="btn" name="submit">Submit</button><br>
      <button class="btn" name="login">Login</button>
    </div>
    </form>
</div>	


</body>
</html>