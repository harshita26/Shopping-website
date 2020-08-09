<?php include('db.php');
session_start();
include ('check.php');
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
<?php include('header.php');?>
   <div class="bg-secondary text-white text-center p-4"><h4>Welcome to our shop!</h4><p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p></div>
   <div class="container my-5">
      <div class="row ">
         <div class="col-sm-6 col-lg-3 text-center px-sm-0 ">
            <div class="border heights rounded p-1 mx-2">
            <a href="camera.php" class="text-dark text-decoration-none"><img src="img/raymond.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">Raymond</h4>
            <p class="mb-3">Price: Rs. 30000.00</p></a>
            <?php if(!isset($_SESSION['id'])){
               ?><a href="login.php" class="btn btn-primary mb-2">Buy Now</a><?php
            }else{
               if(check_if_added_to_cart(9)){
                  ?><a href="#" class="disabled mb-2" >Added to Cart</a><?php
               }else{
                  ?><a href="cart_add.php?id=9" class="btn btn-primary mb-2" >Add to Cart</a><?php
               }
            } ?>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3 text-center px-sm-0 px-2">
            <div class="border heights rounded p-1 mx-2">
            <a href="watch.php" class="text-dark text-decoration-none"><img src="img/charles.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">Charles</h4>
            <p class="mb-3">Price: Rs. 24000.00</p></a>
            <?php if(!isset($_SESSION['id'])){
               ?><a href="login.php" class="btn btn-primary mb-2">Buy Now</a><?php
            }else{
               if(check_if_added_to_cart(10)){
                  ?><a href="#" class="disabled mb-2" >Added to Cart</a><?php
               }else{
                  ?><a href="cart_add.php?id=10" class="btn btn-primary mb-2" >Add to Cart</a><?php
               }
            } ?>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3 text-center px-sm-0">
            <div class="border heights rounded p-1 mx-2">
            <a href="shirt.php" class="text-dark text-decoration-none"><img src="img/HXR.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">HXR</h4>
            <p class="mb-3">Price: Rs. 35000.00</p></a>
            <?php if(!isset($_SESSION['id'])){
               ?><a href="login.php" class="btn btn-primary mb-2">Buy Now</a><?php
            }else{
               if(check_if_added_to_cart(11)){
                  ?><a href="#" class="disabled mb-2" >Added to Cart</a><?php
               }else{
                  ?><a href="cart_add.php?id=11" class="btn btn-primary mb-2" >Add to Cart</a><?php
               }
            } ?>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3 text-center px-sm-0">
            <div class="border heights rounded p-1 mx-2">
            <a href="shirt.php" class="text-dark text-decoration-none"><img src="img/pink.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">PINK</h4>
            <p class="mb-3">Price: Rs. 6000.00</p></a>
            <?php if(!isset($_SESSION['id'])){
               ?><a href="login.php" class="btn btn-primary mb-2">Buy Now</a><?php
            }else{
               if(check_if_added_to_cart(12)){
                  ?><a href="#" class="disabled mb-2" >Added to Cart</a><?php
               }else{
                  ?><a href="cart_add.php?id=12" class="btn btn-primary mb-2" >Add to Cart</a><?php
               }
            } ?>
            </div>
         </div>
      </div>
   </div>
   <footer class="bg text-center p-3 text-white">
      <p>Copyright © abc Store. All Rights Reserved.</p>
      <p>This website is developed by Harshita khandelwal</p>
   </footer>
   
</body>
</html>