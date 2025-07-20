<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Contact Messages</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($contacts)): ?>
                        <?php foreach($contacts as $contact): ?>
                            <tr>
                                <td><?= $contact['id'] ?></td>
                                <td><?= esc($contact['name']) ?></td>
                                <td><?= esc($contact['email']) ?></td>
                                <td><?= esc($contact['message']) ?></td>
                                <td>
                                    <a href="/admin/contact/delete/<?= $contact['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this message?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">No messages found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
