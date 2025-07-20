<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Edit Product</h1>
<form action="/admin/products/update/<?= $product['id'] ?>" method="post">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="4" required><?= $product['description'] ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" step="0.01" value="<?= $product['price'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?= $this->endSection() ?>
