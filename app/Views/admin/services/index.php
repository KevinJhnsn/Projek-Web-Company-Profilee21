<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Services</h1>
<a href="/admin/services/create" class="btn btn-primary mb-3">Add Service</a>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($services as $service): ?>
            <tr>
                <td><?= $service['id'] ?></td>
                <td><?= $service['title'] ?></td>
                <td><?= $service['description'] ?></td>
                <td>
                    <a href="/admin/services/edit/<?= $service['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/admin/services/delete/<?= $service['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
