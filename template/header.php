<?php 
  $email = "";
  // session_start();
  if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  }
  // echo $email;
?>
<header class="p-3 bg-dark text-white header">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="../index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="../cart.php" class="nav-link px-2 text-white">Cart</a></li>
          <li><a href="../profilr.php" class="nav-link px-2 text-white">Acount</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
      <?php 
      if(!$email){ ?>
        <div class="text-end">  
          <a type="a" href="../login.php" class="btn btn-outline-light me-2">Login</a>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
        <?php } else {
           ?>
           <div class="text-end">
              <a href="../load/logout.php">LOGOUT</a>
          </div>
           <?php
        } ?>
      </div>
    </div>
  </header>