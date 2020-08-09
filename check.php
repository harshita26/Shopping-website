<?php
function check_if_added_to_cart($item_id){
   include ('db.php');
   $user_id=$_SESSION['id'];
   $check_query="select * from users_items where user_id='$user_id' and item_id='$item_id' and status='Added to cart';";
   $run=mysqli_query($conn,$check_query) or die(mysqli_error($conn));
   if(mysqli_num_rows($run)>=1) return 1;
   return 0;
}

?>