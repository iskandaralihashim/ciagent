<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <h2 class="mb-4">Add New Item</h2>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?= base_url('/items/store') ?>" class="needs-validation" novalidate>
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="name" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= old('name') ?>" required>
                <div class="invalid-feedback">Item name is required.</div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5"><?= old('description') ?></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" value="<?= old('price') ?>" required>
                    <div class="invalid-feedback">Price is required and must be a valid number.</div>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary btn-lg">Save Item</button>
                <a href="<?= base_url('/items') ?>" class="btn btn-secondary btn-lg">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            const forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?= $this->endSection() ?>
