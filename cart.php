<?php 
include("./connction.php");
session_start();
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
        if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT cartitem FROM user where email = '$email' limit 1 ";

    $resul = $con->query($sql);
    $row = $resul->fetch_assoc();
    // print_r($row);

if(empty($row['cartitem'])){
    if(!$_SESSION['cart']="") {
        $sqll = "UPDATE user
        SET cartitem = '$id'
        WHERE  email = '$email'";
        if($con->query($sqll) == true) {
            // print("Sucess");
            $_SESSION['cartitem'] = $id;
        }
    }
    header("location:index.php");
}else{
    $f = explode(",", $row['cartitem']);
    if(in_array($id, $f)) {
        $_SESSION['cartitem'] = $f;
        
    } else {
    $additem = $row['cartitem'] . "," . $id;
    // if(empty($_SESSION['cart'])) {
    $sqll = "UPDATE user
        SET cartitem = '$additem'
        WHERE  email = '$email'";
    if($con->query($sqll) == true) {
        // print("Sucess");
    $f = explode(",", $row['cartitem']);
        $_SESSION['cartitem'] = $f;
    }
}
header("location:index.php");

}
    }

    
}    
    else{
    ?>
        <h1>Please Login!</h1>
        <a href="./login.php?id=sss">LOGIN!</a>
    <?php
}
?>
<!DOCTYPE html>
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
        <?php 
            require_once("./template/cartde.php");
        ?>
    </main>
</body>
</html>