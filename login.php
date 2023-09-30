<?php 
  session_start();
  include("./connction.php");
  if(isset($_POST['login'])){
    // echo "hai";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $loginsql = "SELECT * FROM user where email = '$email' limit 1 ";
    $reult = $con->query($loginsql);
    if($reult->num_rows>0){
      $user_data = $reult->fetch_assoc();
      if($password==$user_data['password']){
      print_r($user_data);
      $_SESSION['email'] = $user_data['email'];
        header("location:./index.php");
      }
    }
    else{
      echo "please enter vaild id";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./style/signin.css">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="" >
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="checkbox mb-3">
      <label>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Sign in</button>
  </form>
</main>
</body>
</html>