<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4">Dashboard Admin</h1>
<p class="lead">Selamat datang kembali, <?= session()->get('adminUsername') ?>!</p>
<p>Berikut adalah ringkasan cepat aktivitas dan data website Anda:</p>

<div class="row g-4 mb-4">
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-handshake fa-3x mb-3 text-primary"></i> <h4 class="card-title">Services</h4>
                    <p class="card-text">Total: <strong>15</strong></p> </div>
                <a href="<?= base_url('admin/services') ?>" class="btn btn-sm btn-outline-primary mt-3">Kelola Services</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-box-open fa-3x mb-3 text-success"></i>
                    <h4 class="card-title">Products</h4>
                    <p class="card-text">Total: <strong>250</strong></p>
                </div>
                <a href="<?= base_url('admin/products') ?>" class="btn btn-sm btn-outline-success mt-3">Kelola Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-briefcase fa-3x mb-3 text-info"></i>
                    <h4 class="card-title">Portfolio</h4>
                    <p class="card-text">Total: <strong>12</strong></p>
                </div>
                <a href="<?= base_url('admin/portfolio') ?>" class="btn btn-sm btn-outline-info mt-3">Kelola Portfolio</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-comment-alt fa-3x mb-3 text-warning"></i>
                    <h4 class="card-title">Testimonials</h4>
                    <p class="card-text">Baru: <strong>3</strong></p>
                </div>
                <a href="<?= base_url('admin/testimonials') ?>" class="btn btn-sm btn-outline-warning mt-3">Kelola Testimonials</a>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<div class="row">
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Aktivitas Terakhir</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">User 'Budi' menambahkan Services baru: "Website Development"</li>
                    <li class="list-group-item">Produk 'DroneX Pro' diedit oleh 'Admin'</li>
                    <li class="list-group-item">Testimonial baru dari 'Santi' menunggu persetujuan</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Link Cepat</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="<?= base_url('admin/settings') ?>"><i class="fas fa-cog me-2"></i>Pengaturan Website</a></li>
                    <li class="list-group-item"><a href="<?= base_url('admin/users') ?>"><i class="fas fa-users me-2"></i>Manajemen Pengguna</a></li>
                    <li class="list-group-item"><a href="<?= base_url('admin/reports') ?>"><i class="fas fa-chart-line me-2"></i>Lihat Laporan</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>