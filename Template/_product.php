<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    // call method addToCart
    if (isset($_POST['cart-submit'])){
        $Cart->addToCart($_POST['userID'], $_POST['itemID']);
    }
}
    $itemID = $_GET['itemID'] ?? 1;
    foreach ($product->getData() as $item):
        if ($item['itemID'] == $itemID):

?>
<section class="container details my-5 pt-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-2" src="<?php echo $item['image'] ?? "./assets/jewelry/bvlgari/1.png"; ?>" alt="">
        </div>

        <div class="col-lg-7 col-md-12 col-12">
<!--            <h6>Home / T-shirt</h6>-->
            <h3 class="py-1 mb-4"><?php echo $item['name'] ?? "Unknown"; ?></h3>
            <h5 CLASS="mb-4">by <?php echo $item['brand'] ?? "Brand"; ?></h5>
            <h4 class="mb-4">$ <?php echo $item['price'] ?? '0'; ?></h4>

            <div class="row">
            <!-- number order -->
<!--            <div class="qty col-sm-5">-->
<!--                <button class="qty-minus btn btn-light" data-id="pro1" type="button"><i class="fal fa-minus"></i></button>-->
<!--                <input type="text" data-id="pro1" class="qty_input btn btn-primary" value="1" placeholder="1">-->
<!--                <button data-id="pro1" class="qty-plus btn btn-light"><i class="fal fa-plus"></i></button>-->
<!--            </div>-->

            <form method="post">
                <input type="hidden" name="itemID" value="<?php echo $item['itemID'] ?? '1'; ?>">
                <input type="hidden" name="userID" value="<?php echo 1; ?>">
                <?php
                if (in_array($item['itemID'],$Cart->getCartId($product->getData('cart')) ?? [])){
                    echo '<button type="submit" class="buy-btn btn btn-success">In The Cart</button>';
                } else{
                    echo '<button type="submit" name="cart-submit" class="cart-btn btn btn-primary col-sm-3">Add To Cart</button>';
                }
                ?>
            </form>
            </div>
            <h4 class="mt-5">Details</h4>
            <span><?php echo $item['itemDescription'] ?? "Unknown"; ?></span>
        </div>
    </div>
</section>

<?php
    endif;
    endforeach;
?>

