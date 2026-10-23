<?= $this->include('templates/header') ?>

<div class="card shadow-sm border-0 max-w-2xl mx-auto">
    <div class="card-body p-4">
        <h3 class="fw-bold mb-3">Edit Customer</h3>
        <p class="text-muted mb-4">Update existing customer details.</p>

        <?php if (session()->getFlashdata('validation')): ?>
            <div class="alert alert-danger mb-4">
                <?= session()->getFlashdata('validation')->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('customers/update/' . $customer['id']) ?>" method="post">
            <?= csrf_field() ?>
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Full Name</label>
                <input type="text" name="full_name" class="form-control form-control-lg" value="<?= old('full_name', $customer['full_name']) ?>">
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Email Address</label>
                <input type="email" name="email" class="form-control form-control-lg" value="<?= old('email', $customer['email']) ?>">
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success px-4">Update Customer</button>
                <a href="<?= base_url('customers') ?>" class="btn btn-outline-secondary px-4">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?= $this->include('templates/footer') ?>