<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Add Service</h1>
<form action="/admin/services/store" method="post">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<?= $this->endSection() ?>
