<?php include ('db.php');
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
   <?php include('header.php'); ?>
   <div class="bg-secondary text-white text-center p-4"><h4>Welcome to our shop!</h4><p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p></div>
   <div class="container my-5">
      <div class="row ">
         <div class="col-sm-6 col-lg-3 text-center px-sm-0 ">
            <div class="border heights rounded mx-2 p-1">
            <a href="camera.php" class="text-dark text-decoration-none"><img src="img/cannon_eos.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">Camera eos</h4>
            <p class="mb-3">Price: Rs. 30000.00</p></a>
            <?php if(!isset($_SESSION['id'])){
               ?><a href="login.php" class="btn btn-primary mb-2">Buy Now</a><?php
            }else{
               if(check_if_added_to_cart(1)){
                  ?><a href="#" class="disabled mb-2" >Added to Cart</a><?php
               }else{
                  ?><a href="cart_add.php?id=1" class="btn btn-primary mb-2" >Add to Cart</a><?php
               }
            } ?>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3 text-center px-sm-0 px-2">
            <div class="border heights rounded mx-2 p-1">
            <a href="watch.php" class="text-dark text-decoration-none"><img src="img/sony_dslr.jpeg" class="img-fluid" alt="">
            <h4 class="pt-3">Sony DSLR</h4>
            <p class="mb-3">Price: Rs. 40000.00</p></a>
            <?php if(!isset($_SESSION['id'])){
               ?><a href="login.php" class="btn btn-primary mb-2">Buy Now</a><?php
            }else{
               if(check_if_added_to_cart(2)){
                  ?><a href="#" class="disabled mb-2" >Added to Cart</a><?php
               }else{
                  ?><a href="cart_add.php?id=2" class="btn btn-primary mb-2" >Add to Cart</a><?php
               }
            } ?>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3 text-center px-sm-0">
            <div class="border heights rounded mx-2 p-1">
            <a href="shirt.php" class="text-dark text-decoration-none"><img src="img/sony_dslr2.jpeg" class="img-fluid" alt="">
            <h4 class="pt-3">SONY DSLR</h4>
            <p class="mb-3">Price: Rs. 50000.00</p></a>
            <?php if(!isset($_SESSION['id'])){
               ?><a href="login.php" class="btn btn-primary mb-2">Buy Now</a><?php
            }else{
               if(check_if_added_to_cart(3)){
                  ?><a href="#" class="disabled mb-2" >Added to Cart</a><?php
               }else{
                  ?><a href="cart_add.php?id=3" class="btn btn-primary mb-2" >Add to Cart</a><?php
               }
            } ?>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3 text-center px-sm-0">
            <div class="border heights rounded mx-2 p-1">
            <a href="shirt.php" class="text-dark text-decoration-none"><img src="img/olympus.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">Olympus</h4>
            <p class="mb-3">Price: Rs. 60000.00</p></a>
            <?php if(!isset($_SESSION['id'])){
               ?><a href="login.php" class="btn btn-primary mb-2">Buy Now</a><?php
            }else{
               if(check_if_added_to_cart(4)){
                  ?><a href="#" class="disabled mb-2" >Added to Cart</a><?php
               }else{
                  ?><a href="cart_add.php?id=4" class="btn btn-primary mb-2" >Add to Cart</a><?php
               }
            } ?>
            </div>
         </div>
      </div>
   </div>
   <footer class="s_bottom bg text-center p-3 text-white">
      <p>Copyright © abc Store. All Rights Reserved.</p>
      <p>This website is developed by Harshita khandelwal</p>
   </footer>
   
</body>
</html>