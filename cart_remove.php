<?php
require 'db.php';
session_start();
$item_id=$_GET['id'];
$userid=$_SESSION['id'];
$remove_query="delete from users_items where item_id='$item_id' and user_id='$userid';";
$run=mysqli_query($conn,$remove_query);
header('location:cart.php');

?>