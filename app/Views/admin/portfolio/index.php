<<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Portfolio</h1>
<a href="/admin/portfolio/create" class="btn btn-primary mb-3">Add Portfolio</a>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($portfolio as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['title'] ?></td>
                <td><?= $item['description'] ?></td>
                <td>
                    <?php if ($item['image']): ?>
                        <img src="/uploads/portfolio/<?= $item['image'] ?>" width="80">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="/admin/portfolio/edit/<?= $item['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/admin/portfolio/delete/<?= $item['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection()?>