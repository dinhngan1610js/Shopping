<?php
    // request method post
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // call method addToCart
        if (isset($_POST['jewelry_submit'])){
           $Cart->addToCart($_POST['userID'], $_POST['itemID']);
        }
    }
?>
<section id="jewelry" class="my-5">
    <div class="container text-center mt-5 py-5">
        <h3>Jewelry</h3>
        <hr class="mx-auto">
        <p>You can check out new vibes on below</p>
    </div>


    <div class="row mx-auto container-fluid">
        <?php foreach ($product_jewelry as $item) { ?>
            <div class="product text-center col-lg-3 con-md-4 col-12">
                <a href="<?php printf('%s?itemID=%s', 'product.php', $item['itemID']); ?>"><img class="img-fluid mb-3" src="<?php echo $item['image'] ?? "./assets/jewelry/bvlgari/1.png"; ?>" alt=""></a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $item['name'] ?? "Unknown"; ?></h5>
                <h4 class="p-price">$ <?php echo $item['price'] ?? '0'; ?></h4>
                <form method="post">
                    <input type="hidden" name="itemID" value="<?php echo $item['itemID'] ?? '1'; ?>">
                    <input type="hidden" name="userID" value="<?php echo 1; ?>">
                    <?php
                        if (in_array($item['itemID'],$Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="buy-btn btn btn-success">In The Cart</button>';
                        } else{
                            echo '<button type="submit" name="jewelry_submit" class="buy-btn btn btn-primary">Add To Cart</button>';
                        }
                    ?>
                </form>
            </div>
        <?php } //closing foreach ?>
    </div>


</section>