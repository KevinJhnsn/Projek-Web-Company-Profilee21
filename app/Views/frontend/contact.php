<?= $this->extend('frontend/layout') ?>
<?= $this->section('content') ?>

<h1>Contact Us</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<form action="/contact/send" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>

<?= $this->endSection() ?>
