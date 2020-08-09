<nav class="navbar navbar-expand-md bg-dark navbar-dark">
   <div class="container">      
   <a href="index.php" class="navbar-brand mr-auto">Shop</a> 
   <button class="navbar-toggler" type='button' data-toggle='collapse' data-target='#navbar01' aria-controls='navbar01' aria-expanded='false' aria-label='Toggle navigation'><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id='navbar01'>
      <ul class="navbar-nav">
      <?php
      // session_start();
      if(isset($_SESSION['id'])){
         ?><li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
         <li class="nav-item"><a href="setting.php" class="nav-link">Setting</a></li>
         <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li><?php
      }else{
         ?><li class="nav-item"><a href="register.php" class="nav-link">Sign up</a></li>
         <li class="nav-item"><a href="login.php" class="nav-link"><i class="fa fa-fw fa-user">Login</a></li>
         <?php
      }
      ?>
      </ul>
      </div>
   </div>  
   </nav>
   