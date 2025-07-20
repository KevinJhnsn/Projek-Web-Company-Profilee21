<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Edit Service</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/admin/services/update/<?= $service['id'] ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= esc($service['title']) ?>" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="4" required><?= esc($service['description']) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
            <a href="/admin/services" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
