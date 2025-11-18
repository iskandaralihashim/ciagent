<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="mb-4 d-flex justify-content-between align-items-center">
    <h2 class="mb-0">Items List</h2>
    <a href="<?= base_url('/items/create') ?>" class="btn btn-primary">+ Add New Item</a>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if (empty($items)): ?>
    <div class="alert alert-info text-center py-5">
        <p class="mb-0">No items found. <a href="<?= base_url('/items/create') ?>">Create one now</a></p>
    </div>
<?php else: ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= substr($item['description'], 0, 50) . (strlen($item['description']) > 50 ? '...' : '') ?></td>
                        <td>$<?= number_format($item['price'], 2) ?></td>
                        <td><?= date('M d, Y', strtotime($item['created_at'])) ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?= base_url('/items/' . $item['id']) ?>" class="btn btn-sm btn-info">View</a>
                                <a href="<?= base_url('/items/' . $item['id'] . '/edit') ?>" class="btn btn-sm btn-warning me-1">Edit</a>
                            </div>
                                <form method="POST" action="<?= base_url('/items/' . $item['id'] . '/delete') ?>" style="display: inline;" onsubmit="return confirm('Are you sure?');">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
