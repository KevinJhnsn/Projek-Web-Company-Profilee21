<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Edit Service</h1>
<form action="/admin/services/update/<?= $service['id'] ?>" method="post">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?= $service['title'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="4" required><?= $service['description'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?= $this->endSection() ?>
