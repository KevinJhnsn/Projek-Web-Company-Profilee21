<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Testimonials</h1>
<a href="/admin/testimonials/create" class="btn btn-primary mb-3">Add Testimonial</a>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Position</th>
            <th>Message</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($testimonials as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['position'] ?></td>
                <td><?= $item['message'] ?></td>
                <td>
                    <?php if ($item['image']): ?>
                        <img src="/uploads/testimonials/<?= $item['image'] ?>" width="80">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="/admin/testimonials/edit/<?= $item['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/admin/testimonials/delete/<?= $item['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
