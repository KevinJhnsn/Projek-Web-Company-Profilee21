<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('admin') ?>">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin') ?>">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/services') ?>">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/products') ?>">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/portfolio') ?>">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/testimonials') ?>">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/contact') ?>">Contact Messages</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php if (session()->has('adminUsername')): ?>
                        <li class="nav-item"><span class="nav-link">Hi, <?= session()->get('adminUsername') ?></span></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/logout') ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?= $this->renderSection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>