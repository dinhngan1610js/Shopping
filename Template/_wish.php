<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-wish-submit'])) {
        $deletedRecord = $Cart->deleteWish($_POST['itemID']);
    }
    if (isset($_POST['cart-submit'])){
        $Cart->addToWishlist($_POST['itemID'],'cart', 'wishlist');
    }
}
?>

<section id="cart" class="my-5 py-5 pb-5">
    <div class="container-fluid w-100">
        <h3 class="container py-3">Wishlist</h3>

        <!-- shopping cart items -->
        <div class="row">
            <div class="col-md-8">
                <div class="card wish-list mb-3">
                    <div class="card-body">
                        <h5 class="sub-total mb-4 ml-4">Wish (<span><?php echo count($product->getData('wishlist'));?></span> items)</h5>

                        <?php
                        foreach ($product->getData('wishlist') as $item):
                            $cart = $product->getProduct($item['itemID']);
                            $subTotal[] = array_map(function ($item){
                                ?>
                                <!-- image col-->
                                <div class="row mb-4">
                                    <div class="col-md-5 col-lg-3 col-xl-3">
                                        <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                            <img class="img-fluid w-100"
                                                 src="<?php echo $item['image'] ?? "./assets/img/feature/1.jpg"; ?>" alt="">
                                        </div>
                                    </div>

                                    <!-- details -->
                                    <div class="col-md-7 col-lg-9 col-xl-9">

                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5><?php echo $item['name'] ?? "Unknown"; ?></h5>
                                                    <small class="pt-3"> by <?php echo $item['brand'] ?? "Brand"; ?></small>
                                                    <!--                                            <p class="mb-4 mt-3 text-muted small">Size : M</p>-->
                                                    <div class="mt-4"></div>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">

                                                    <form method="post">
                                                        <input type="hidden" value="<?php echo $item['itemID'] ?? 0; ?>" name="itemID">
                                                        <button type="submit" name="delete-wish-submit" class="card-link-secondary btn btn-danger small mr-3"><i
                                                                class="fas fa-trash-alt mr-1"></i> Remove item </button>
                                                    </form>

                                                    <form method="post">
                                                        <input type="hidden" value="<?php echo $item['itemID'] ?? 0; ?>" name="itemID">
                                                        <button type="submit" name="cart-submit" class="card-secondary small btn btn-primary"> Add To Cart </button>
                                                    </form>

                                                <span class="product_price ml-auto" data-id="<?php echo $item['itemID'] ?? '0'; ?>">$ <?php echo $item['price'] ?? 0; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3"></div>
                                <?php
                                return $item['price'];
                            }, $cart);
                        endforeach;
                        ?>
                        <!--closing foreach-->
                        <p class="text-primary mt-4 ml-4"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
                            items to your cart does not mean booking them.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
