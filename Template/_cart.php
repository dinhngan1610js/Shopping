<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['delete-submit'])) {
            $deletedRecord = $Cart->deleteCart($_POST['itemID']);
        }

        if (isset($_POST['wishlist-submit'])) {
            $Cart->addToWishlist($_POST['itemID']);
        }
    }
?>

<section id="cart" class="my-5 py-5 pb-5">
    <div class="container-fluid w-100">
        <h3 class="container py-3">Shopping Cart</h3>

        <!-- shopping cart items -->
        <div class="row">
            <div class="col-md-8">
                <div class="card wish-list mb-3">
                    <div class="card-body">
                        <h5 class="sub-total mb-4 ml-4">Cart (<span><?php echo count($product->getData('cart'));?></span> items)</h5>

                        <?php
                        foreach ($product->getData('cart') as $item):
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
                                        <!-- number -->
                                        <div class="qty text-right">
                                            <button class="qty-minus btn btn-light col-sm-2" data-id="<?php echo $item['itemID'] ?? '0'; ?>"><i class="fal fa-minus"></i></button>
                                            <input type="text" data-id="<?php echo $item['itemID'] ?? '0'; ?>" class="qty_input btn btn-outline-primary col-sm-2" value="1" placeholder="1">
                                            <button data-id="<?php echo $item['itemID'] ?? '0'; ?>" class="qty-plus btn btn-light col-sm-2"><i class="fal fa-plus"></i></button>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">

                                            <form method="post">
                                                <input type="hidden" value="<?php echo $item['itemID'] ?? 0; ?>" name="itemID">
                                                <button type="submit" name="delete-submit" class="card-link-secondary btn btn-danger small mr-3"><i
                                                            class="fas fa-trash-alt mr-1"></i> Remove item </button>
                                            </form>

                                            <form method="post">
                                                <input type="hidden" value="<?php echo $item['itemID'] ?? 0; ?>" name="itemID">
                                                <button type="submit" name="wishlist-submit" class="card-secondary small btn btn-success"><i
                                                            class="fas fa-heart"></i> Move to Wishlist </button>
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

            <!-- Total -->
            <div class="col-md-4">
                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">

                        <h5 class="mb-3">Total</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Temporary
                                <span id="deal-price">$<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>$ 6.00</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>The total amount of</strong>
                                </div>
                            </li>
                        </ul>
                        <button type="submit" class="btn-order btn-primary btn-block waves-effect waves-light">go to checkout</button>
                    </div>
                </div>
        </div>
    </div>
</section>