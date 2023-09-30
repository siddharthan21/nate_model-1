<?php
session_start();
include("./connction.php");
include("./load/loadtemp.php");
?>
<!doctype html>
<html lang="en">
  <head>

  <?php  
      require_once("./template/head.php");
  ?>
    
  </head>
  <body>
    
<header>
      <?php
        require_once("./template/header.php");
      ?>
</header>

<main>


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2">
        
        <?php 
        load("imge");
         ?>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/dist/js/main.js"></script>
  </body>
</html>
  