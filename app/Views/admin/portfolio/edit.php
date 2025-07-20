<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Edit Portfolio</h1>
<form action="/admin/portfolio/update/<?= $portfolio['id'] ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="old_image" value="<?= $portfolio['image'] ?>">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?= $portfolio['title'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="4" required><?= $portfolio['description'] ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Current Image</label><br>
        <?php if ($portfolio['image']): ?>
            <img src="/uploads/portfolio/<?= $portfolio['image'] ?>" width="120">
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label class="form-label">Replace Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?= $this->endSection() ?>
