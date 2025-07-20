<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Add Testimonial</h1>
<form action="/admin/testimonials/store" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" name="position">
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" name="message" rows="4" required></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<?= $this->endSection() ?>
