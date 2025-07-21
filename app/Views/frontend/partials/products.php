<section id="products" class="products-section section-padding">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Our Collection</span>
                    <h2>Our Products</h2>
                    <p class="mt-3">Discover our range of innovative and high-quality products.</p>
                </div>
            </div>
        </div>

        <!-- Products Items -->
        <div class="row mt-5">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $index => $product): ?>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="<?= (0.1 * $index) ?>s">
                        <div class="single-product shadow-sm h-100">
                            <!-- Product Image -->
                            <?php if (!empty($product['image'])): ?>
                                <div class="product-img">
                                    <img src="<?= base_url('uploads/products/' . $product['image']) ?>" 
                                         class="img-fluid" 
                                         alt="<?= esc($product['name']) ?>">
                                </div>
                            <?php else: ?>
                                <div class="product-img bg-light text-center py-5">
                                    <i class="fas fa-box fa-3x text-secondary"></i>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Product Content -->
                            <div class="p-4">
                                <h5 class="product-title"><?= esc($product['name']) ?></h5>
                                <p class="product-desc"><?= esc($product['description']) ?></p>
                                <?php if (!empty($product['price'])): ?>
                                    <p class="text-primary fw-bold">Price: <?= esc($product['price']) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center mt-4">No products available at the moment.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
