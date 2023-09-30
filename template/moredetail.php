<?php 
include("./connction.php");
$product = $_GET['id'];
// echo $product;
$sql = "SELECT * FROM ime where id = '$product' ";
$resul = $con->query($sql);

while($row = $resul->fetch_assoc())
{
    $productmore = $row;
}

// print_r($productmore);

?>
<link rel="stylesheet" href="../style/main.css">
<div class="more-main more-main-1">
    <div class="moreiner moreiner-1">
        <img src="../assets/imge/<?php echo $productmore['img-1'] ?>" class="more-main-img" alt="">
    </div>
    <div class="moreiner more-main-2">
        <div class="name">
            <p>Oversized Fit Baseball jacket</p>
            <h3>RS:
            <?php echo $productmore['price']; ?>
            </h3>
        </div>
        <div class="size">
            <ul class="iner-size">
                <li>XS</li>
                <li>S</li>
                <li>M</li>
                <li>L</li>
                <li>XL</li>
                <li>XXL</li>
            </ul>
        </div>
        <div class="add">
            <form action="" method="get">
                <a href="../cart.php?id=<?php echo $id?>">ADD</a>
            </form>
        </div>
    </div>
    <div class="more-img">
        <?php for($i=1;$i<5;$i++){ 
            $c = "img-" . $i;
            ?>
            <img src="../assets/imge/<?php echo $productmore[$c] ?>" class="selct-img" alt="">
            <?php } ?>
    </div>
</div>