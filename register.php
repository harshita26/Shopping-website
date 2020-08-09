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
         <h4 class="bg-primary text-white p-3">Register/ Sign Up</h4>
         <p>Register to make a purchase</p>
         <form action="" method="post" class="px-4">
            <div class="form-group">
               <input type="text" class="form-control" name="uname" placeholder="Enter a username" required pattern="[A-za-z]{2,20}" title="Enter only alphabet">
            </div>
            <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="Enter a Email id" required>
            </div>
            <div class="form-group">
               <input type="password" class="form-control" minlength="6" name="pass" placeholder="Password(min 6 character)"required>
            </div>
            <div class="form-group">
               <input type="tell" class="form-control" pattern="[0-9-+]{9,15}" title="enter a valid phone number" name="phone" placeholder="Enter a Contact number"required>
            </div>
            <div class="form-group">
               <input type="text" class="form-control"pattern="[A-za-z]{2,20}" title="Enter only alphabet" name="city" placeholder="Enter a City"required>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="address" placeholder="Enter a Address"required>
            </div>
            <input type="submit" value="Sign up" name="register" class="form-control btn-outline-primary text-center rounded w-75 mx-auto">
         </form>        
         <p class="bg_light py-2 mb-0 mt-3">You have an account yet? <a href="login.php">Login</a></p>
      </div>
      <?php 
   if(isset($_POST['register'])){
      $name=mysqli_real_escape_string($conn,$_POST['uname']);// it use to remove 'problem in input
      $mail=mysqli_real_escape_string($conn,$_POST['email']);
      $password=$_POST['pass'];
      // $password=md5(md5(mysqli_real_escape_string($conn,$_POST['pass'])));// md5 using to convert a password string or digit into a code of something
      $cont=$_POST['phone'];
      $city=$_POST['city'];
      $address=$_POST['address'];
      $duplicate_entry="select id from user where mail ='$mail'";
      $duplicate_user=mysqli_query($conn,$duplicate_entry) or die(mysqli_error($duplicate_entry));
      if(mysqli_num_rows($duplicate_user)>0){
         ?>
         <div class='alert alert-danger alert-dismissable'><button class='close' type='button' data-dismiss='alert'>&times;</button><strong>Fail!</strong> try again</div>
         <meta http-equiv="refresh" content="20;url=register.php"/>          
         <?php
      }else{
         $user_entry="insert into user (name,mail,password,contact,city,address) values ('$name','$mail','$password','$cont','$city','$address')";
         $entry_submit=mysqli_query($conn,$user_entry);
         $_SESSION['email']=$mail;
         //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
         $_SESSION['id']=mysqli_insert_id($con);
         ?>
         <!-- <script>document.getElementById("demo").innerHtml="success"</script> -->
         <div class='alert alert-success alert-dismissable'><button class='close' type='button' data-dismiss='alert'>&times;</button><strong>Success!</strong>You can login now</div>
        $_SESSION['email']=$mail;
        <meta http-equiv="refresh" content="20;url=index.php" />
         <?php
      }
   }
   ?>   
   </div>
   <footer class="bg text-center p-3 text-white">
      <p>Copyright © abc Store. All Rights Reserved.</p>
      <p>This website is developed by Harshita khandelwal</p>
   </footer>
   
   
</body>
</html>