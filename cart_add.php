<?php
include ('db.php');
session_start();
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
$run=mysqli_query($conn,$add_to_cart_query);
header('location:index.php');
?>