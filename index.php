<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shop</title>    
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
   <script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   
</head>
<body>
   <?php include('header.php')
   ?>
   <div>
   <img src="img/main.jpg" alt="" width="100%" height="600px">
   <div class="text-center text-white p-5 pos">
      <h3>WE SELL</h3>
      <p>Flat 40% OFF on all premium brands</p>
      <button class="btn btn-danger">Shop Now</button>
   </div>
   </div>
   <div class="container my-5">
      <div class="row ">
         <div class="col-4 text-center px-md-0 ">
            <div class="border heights rounded p-1">
            <a href="camera.php" class="text-dark text-decoration-none"><img src="img/camera.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">Camera</h4>
            <p class="mb-3">Choose among the best available in the world.</p></a>
            </div>
         </div>
         <div class="col-4 text-center px-md-0 px-2">
            <div class="border heights rounded p-1">
            <a href="watch.php" class="text-dark text-decoration-none"><img src="img/watch.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">Watches</h4>
            <p class="mb-3">Original watches from the best brands.</p></a>
            </div>
         </div>
         <div class="col-4 text-center px-md-0">
            <div class="border heights rounded p-1">
            <a href="shirt.php" class="text-dark text-decoration-none"><img src="img/shirt.jpg" class="img-fluid" alt="">
            <h4 class="pt-3">Shirts</h4>
            <p class="mb-3">Our exquisite collection of shirts.</p></a>
            </div>
         </div>
      </div>
   </div>

   <footer class="s_bottom bg text-center p-3 text-white font-weight-bold">
      <p>Copyright © abc Store. All Rights Reserved.</p>
      <p>This website is developed by Harshita khandelwal</p>
   </footer>
   
</body>
</html>