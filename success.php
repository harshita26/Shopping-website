<?php include('db.php');
session_start();
if(!isset($_SESSION['id'])){
   header('location:login.php');
}else{
   $userid=$_GET['id'];
   $confirm_order_query="update users_items set status='confirmed' where user_id='$userid';";
   $run=mysqli_query($conn,$confirm_order_query) or die(mysqli_error($conn));
}
// $uid=$_SESSION['id'];
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
   <div class="bg-secondary text-white text-center p-4"><h4>Welcome to our shop!</h4><p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
   </div>
   <div class="container">
      <div class="">
         <div class="my-5 border mx-auto text-center p-0 "style="width:400px;">
            <h2 class="text-white bg-primary">THANK YOU!</h2>
            <p>Your order is confirmed. Thank you for shopping with us. <a href="index.php">Click here</a> to purchase any other item.</p>
         </div>
      </div>
   </div>
   <footer class="text-center p-3 text-white">
      <p>Copyright © abc Store. All Rights Reserved.</p>
      <p>This website is developed by Harshita khandelwal</p>
   </footer>
</body>
</html>