<?php include('db.php');
session_start();
if(isset($_SESSION['id'])){
   header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shop</title>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
   <?php include('header.php'); ?>
   <div class="bg-secondary text-white text-center p-4"><h4>Welcome to our shop!</h4><p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p></div>
   <div class="container my-5" style="width:400px">
      <div class="text-center mx-auto border rounded">
         <h4 class="bg-primary text-white p-3">Login</h4>
         <p>Login to make a purchase</p>
         <form action="" method="post" class="px-4">
            <div class="form-group"><input type="text" class="form-control" name="mail" placeholder="Enter a username/ email id"></div>
            <div class="form-group"><input type="password" class="form-control" name="pass" minlength="6" placeholder="Password(min 6 character)"></div>
            <input type="submit" name="login" value="Login" class="form-control btn-outline-primary text-center rounded w-75 mx-auto">
         </form>        
         <p class="bg_light py-2 mb-0 mt-3">Don't have an account yet? <a href="register.php">Register</a></p>
      </div>
      <?php 
      if(isset($_POST['login'])){
         $email=mysqli_real_escape_string($conn,$_POST['mail']);
         $password=$_POST['pass'];
         // $password=md5(md5(mysqli_real_escape_string($conn,$_POST['pass'])));
      $login_query="select id,mail from user where mail ='$email' and password='$password';";
      $run=mysqli_query($conn,$login_query) or die(mysqli_error($conn));
      $rows_fetched=mysqli_num_rows($run);
    if($rows_fetched<1){
         ?>
         <div class="alert alert-danger alert-dismissable">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <strong>Wrong username or password!</strong> Try again
         </div>
         <!-- <meta http-equiv="refresh" content="20;url=login.php"/> -->
         <?php
      }else{
         $data=mysqli_fetch_assoc($run);
         $_SESSION['email']=$email;
         $_SESSION['id']=$data['id'];
         ?>
         <div class="alert alert-success alert-dismissable">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Login success
         </div>
         <meta http-equiv="refresh" content="5;url=index.php"/>
         <?php
      }
      }
      ?>
   </div>
   <footer class="s_bottom bg text-center p-3 text-white">
      <p>Copyright © abc Store. All Rights Reserved.</p>
      <p>This website is developed by Harshita khandelwal</p>
   </footer>   
</body>
</html>