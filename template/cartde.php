
<?php
// session_start();

include("./connction.php");
if(isset($_SESSION['cartitem'])) {
    if(($_SESSION['cartitem'])==0){

    }
    $cont = count($_SESSION['cartitem']);
    for($i = 0;$i < $cont;$i++) {

        $proid = $_SESSION['cartitem'][$i];
        // echo $proid;
        $sql = "SELECT * FROM ime where id = '$proid' limit 1 ";
        $resul = $con->query($sql);
        if($resul->num_rows > 0) {
            $row[$i] = $resul->fetch_assoc();
        }
    }
    // echo "<pre>";
    //  print_r($row);
    //  echo "</pre>";


    ?>
<!-- <div class="cartde cartde-1">   
    <?php
        print_r($_SESSION['cartitem']);
    for($i = 0;$i <= $cont;$i++) {
        ?>    
<img src="../assets/imge/<?php echo $row[$i]['img-1']?>" width="250px" alt="" srcset="">
<?php
// echo $row[$i]['img-1'];
    }?>
</div> -->
<!-- <link rel="stylesheet" href="../style/signin.css"> -->
<div class="cartt-items">
    <table id="customers">
        <tr>
            <th>PRODUCT</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
        </tr>
        <?php
for($i = 0;$i < $cont;$i++) {
    ?>
    <tr>
        <th>
            <img src="../assets/imge/<?php echo $row[$i]['img-1']?>" width="100px" height="100px" alt="" srcset="">
        </th>
        <th><?php echo $row[$i]['price'] ?></th>
        <th>2</th>
    </tr>
    <?php
}
    ?>
    </table>
</div>
<?php } 
else{
    echo "user cart is empty";
}
?>