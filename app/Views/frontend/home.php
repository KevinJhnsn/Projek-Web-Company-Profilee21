<?= $this->extend('frontend/layout') ?>
<?= $this->section('content') ?>

<h1>Welcome to Our Company</h1>

<!-- Services Section -->
<h2>Our Services</h2>
<div class="row">
    <?php if (!empty($services)): ?>
        <?php foreach ($services as $service): ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4><?= esc($service['title'] ?? 'Untitled') ?></h4>
                        <p><?= esc($service['description'] ?? '-') ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No services available.</p>
    <?php endif; ?>
</div>

<!-- Products Section -->
<h2>Our Products</h2>
<div class="row">
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            <?= esc($product['name'] ?? 'Unnamed') ?> 
                            - Rp<?= number_format($product['price'] ?? 0, 0, ',', '.') ?>
                        </h4>
                        <p><?= esc($product['description'] ?? '-') ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No products available.</p>
    <?php endif; ?>
</div>

<!-- Portfolio Section -->
<h2>Portfolio</h2>
<div class="row">
    <?php if (!empty($portfolio)): ?>
        <?php foreach ($portfolio as $item): ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <?php if (!empty($item['image'])): ?>
                        <img src="/uploads/portfolio/<?= esc($item['image']) ?>" class="card-img-top" alt="<?= esc($item['title']) ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h4><?= esc($item['title'] ?? 'No Title') ?></h4>
                        <p><?= esc($item['description'] ?? '-') ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No portfolio items available.</p>
    <?php endif; ?>
</div>

<!-- Testimonials Section -->
<h2>Testimonials</h2>
<div class="row">
    <?php if (!empty($testimonials)): ?>
        <?php foreach ($testimonials as $t): ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <?php if (!empty($t['image'])): ?>
                        <img src="/uploads/testimonials/<?= esc($t['image']) ?>" 
                             class="card-img-top rounded-circle" 
                             alt="<?= esc($t['name']) ?>" 
                             style="width:120px; height:120px; margin:auto; margin-top:10px;">
                    <?php endif; ?>
                    <div class="card-body text-center">
                        <p>"<?= esc($t['message'] ?? '-') ?>"</p>
                        <h5><?= esc($t['name'] ?? 'Anonymous') ?></h5>
                        <small><?= esc($t['position'] ?? '-') ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No testimonials available.</p>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
