<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1>Pesan Contact</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($contacts)): ?>
            <?php foreach ($contacts as $key => $c): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= esc($c['name']) ?></td>
                    <td><?= esc($c['email']) ?></td>
                    <td><?= esc($c['message']) ?></td>
                    <td><?= $c['created_at'] ?></td>
                    <td>
                        <a href="/admin/contact/delete/<?= $c['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pesan ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6" class="text-center">Belum ada pesan.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
            