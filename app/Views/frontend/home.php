<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">CompanyName</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('services') ?>">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('products') ?>">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('portfolio') ?>">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to Our Company</h1>
        <p class="lead">We provide top-notch services and products for your business growth</p>
        <a href="#services" class="btn btn-light btn-lg mt-3">Explore Services</a>
    </div>
</header>

<!-- About Us -->
<section class="py-5">
    <div class="container text-center">
        <h2>About Us</h2>
        <p class="text-muted">We are a digital agency specializing in web development, product innovation, and creative solutions for modern businesses.</p>
    </div>
</section>

<!-- Services -->
<section class="py-5 bg-light" id="services">
    <div class="container text-center">
        <h2 class="mb-4">Our Services</h2>
        <div class="row">
            <?php foreach ($services as $service): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-cogs fa-2x text-primary mb-3"></i>
                            <h5 class="card-title"><?= esc($service['title']) ?></h5>
                            <p class="card-text"><?= esc($service['description']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Products -->
<section class="py-5" id="products">
    <div class="container text-center">
        <h2 class="mb-4">Our Products</h2>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <?php if (!empty($product['image'])): ?>
                            <img src="<?= base_url('uploads/products/' . $product['image']) ?>" class="card-img-top" alt="<?= esc($product['name']) ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($product['name']) ?></h5>
                            <p class="card-text"><?= esc($product['description']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3">
    <p>&copy; <?= date('Y') ?> CompanyName. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
