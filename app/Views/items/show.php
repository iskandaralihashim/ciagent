<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><?= $item['name'] ?></h2>
            <div class="btn-group">
                <a href="<?= base_url('/items/' . $item['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                <form method="POST" action="<?= base_url('/items/' . $item['id'] . '/delete') ?>" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Item Details</h5>
                <hr>
                
                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>ID:</strong>
                    </div>
                    <div class="col-md-9">
                        <?= $item['id'] ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Name:</strong>
                    </div>
                    <div class="col-md-9">
                        <?= $item['name'] ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Price:</strong>
                    </div>
                    <div class="col-md-9">
                        <span class="badge bg-success fs-6">$<?= number_format($item['price'], 2) ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Description:</strong>
                    </div>
                    <div class="col-md-9">
                        <?= $item['description'] ?? 'No description available.' ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Created:</strong>
                    </div>
                    <div class="col-md-9">
                        <?= date('M d, Y H:i A', strtotime($item['created_at'])) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Updated:</strong>
                    </div>
                    <div class="col-md-9">
                        <?= date('M d, Y H:i A', strtotime($item['updated_at'])) ?>
                    </div>
                </div>

                <hr>
                <a href="<?= base_url('/items') ?>" class="btn btn-secondary mt-3">Back to Items</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
