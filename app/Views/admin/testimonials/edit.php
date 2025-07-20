<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Edit Testimonial</h1>
<form action="/admin/testimonials/update/<?= $testimonial['id'] ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="old_image" value="<?= $testimonial['image'] ?>">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?= $testimonial['name'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" name="position" value="<?= $testimonial['position'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" name="message" rows="4" required><?= $testimonial['message'] ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Current Image</label><br>
        <?php if ($testimonial['image']): ?>
            <img src="/uploads/testimonials/<?= $testimonial['image'] ?>" width="120">
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label class="form-label">Replace Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?= $this->endSection() ?>
