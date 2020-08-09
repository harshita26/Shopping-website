<?php include('db.php');
session_start();
if(!isset($_SESSION['id'])){
   header('location:login.php');
}
$uid=$_SESSION['id'];
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
      <div class="row">
         <div class="col-12 my-5">
            <table class="table table-bordered table-striped">
               <tbody>
                  <tr>
                     <th>Item Number</th><th>Item Name</th><th>Price</th><th>Edit</th>
                  </tr>
                  <?php $qry="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$uid'";
                  $run=mysqli_query($conn,$qry) or die(mysqli_error($conn));
                  $sum=0;
                  if(mysqli_num_rows($run)==0){
                     ?><tr><td colspan="4">No Items in the cart</td></tr><?php
                  }else{
                     $count=0;
                     while($data=mysqli_fetch_assoc($run)){
                        $sum=$sum+$data['price'];
                        ?><tr><td><?php echo $count; $count++;?></td><td><?php echo $data['name']; ?></td><td><?php echo $data['price']; ?></td><td><a href='cart_remove.php?id=<?php echo $data['id'] ?>'>Remove</a></td></tr><?php
                     }
                  } ?>
                  <tr>
                     <th colspan='2'>Total</th><th>Rs.<?php echo $sum;?></th><th><a href="success.php?id=<?php echo $uid;?>" class="btn btn-primary">Confirm Order</a></th>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <footer class="text-center p-3 text-white">
      <p>Copyright © abc Store. All Rights Reserved.</p>
      <p>This website is developed by Harshita khandelwal</p>
   </footer>
</body>
</html>