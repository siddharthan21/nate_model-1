<?php 
    include("./connction.php");
    $sql = "SELECT * FROM ime ";
    $resul = $con->query($sql);
    while($row = $resul->fetch_assoc()){
      $de[] = $row;
    }
for($i = 0;$i < 6;$i++) {
    ?>
        <div class="col">
          <div class="card shadow-sm">

            <img src="../assets/imge/<?php echo $de[$i]["img-1"]?>" width="300x" alt="" srcset="">

            <div class="card-body">
                <form action="" method="get">
                <p class="card-text hover">
                  <a href="../more.php?id=<?php echo $de[$i]["id"]?>" target="_blank">View</a>
              </p>
                </form>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="">BUY</a>
                  <a href="../cart.php?id=<?php echo $de[$i]['id'] ?>">ADD TO CART</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
}
?>    