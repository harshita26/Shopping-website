<?php include('db.php');
    session_start();
if(!isset($_SESSION['email'])){
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
         <h4 class="bg-primary text-white p-3">Change Password</h4>
         <form action="" method="post" class="px-4">
            <div class="form-group"><input type="password" class="form-control" name="old_pass" placeholder="Old Password"></div>
            <div class="form-group"><input type="password" class="form-control" name="new_pass" minlength="6" placeholder="New Password"></div>
            <div class="form-group"><input type="password" class="form-control" name="pass" minlength="6" placeholder="New Password"></div>
            <input type="submit" name="update" value="Change" class="form-control btn-outline-primary text-center rounded w-75 mx-auto mb-3">
         </form>        
      </div>
      <?php 
      $email=$_SESSION['email'];
      if(isset($_POST['update'])){
         $password1=$_POST['old_pass'];
      // $password1=md5(md5(mysqli_real_escape_string($conn,$_POST['old_pass'])));
      $password2=$_POST['new_pass'];
      // $password2=md5(md5(mysqli_real_escape_string($conn,$_POST['new_pass'])));
      $old_password_from_db="select password from user where mail='$email';";
      $runs=mysqli_query($conn,$old_password_from_db);
      $data=mysqli_fetch_assoc($runs);
      if($data['password']==$password1){
         $login="update user set password='$password2' where mail ='$email'";
      $run=mysqli_query($conn,$login);
         ?>
         <div class="alert alert-success alert-dismissable">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Your password has been updated.
         </div>
         <?php
      }else{
         ?>
         <div class="alert alert-danger alert-dismissable">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <strong>Wrong password!</strong> Try again
         </div>
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