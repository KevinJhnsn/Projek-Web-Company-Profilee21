<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Add Product</h1>
<form action="/admin/products/store" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="4" required></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" step="0.01" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<?= $this->endSection() ?>
