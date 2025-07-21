<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h1>Edit Portfolio</h1>

    <!-- Tampilkan error / success -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/admin/portfolio/update/' . $portfolio['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control"
                   value="<?= esc($portfolio['title']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required><?= esc($portfolio['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label><br>
            <?php if (!empty($portfolio['image'])): ?>
                <img src="<?= base_url('uploads/portfolio/' . $portfolio['image']) ?>" 
                     alt="Portfolio Image" class="img-thumbnail mb-2" style="width: 200px; height: auto;">
                <input type="hidden" name="old_image" value="<?= esc($portfolio['image']) ?>">
            <?php endif; ?>
            <input type="file" name="image" id="image" class="form-control">
            <small class="text-muted">Upload new image only if you want to replace the old one.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update Portfolio</button>
        <a href="<?= base_url('/admin/portfolio') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?= $this->endSection() ?>
