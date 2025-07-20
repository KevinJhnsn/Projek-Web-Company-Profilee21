<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Edit Portfolio</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/admin/portfolio/update/<?= $item['id'] ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= esc($item['title']) ?>" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="4" required><?= esc($item['description']) ?></textarea>
            </div>
            <div class="form-group">
                <label>Current Image</label><br>
                <?php if (!empty($item['image'])): ?>
                    <img src="/uploads/portfolio/<?= esc($item['image']) ?>" width="100" alt="">
                <?php else: ?>
                    <span class="text-muted">No image uploaded</span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Change Image (optional)</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
            <a href="/admin/portfolio" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
