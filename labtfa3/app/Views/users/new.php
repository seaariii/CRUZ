<?= $this->include('templates/header') ?>

<div class="card shadow-sm border-0 max-w-2xl mx-auto">
    <div class="card-body p-4">
        <h3 class="fw-bold mb-3">Add New User</h3>
        <p class="text-muted mb-4">Create a new system user account.</p>

        <?php if (session()->has('errors')): ?>
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                <ul class="mb-0 ps-3">
                    <?php foreach (session('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('users/create') ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control form-control-lg" placeholder="e.g. john_doe" value="<?= old('username') ?>">
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Full Name</label>
                <input type="text" name="full_name" class="form-control form-control-lg" placeholder="e.g. John Doe" value="<?= old('full_name') ?>">
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4">Save User</button>
                <a href="<?= base_url('users') ?>" class="btn btn-outline-secondary px-4">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?= $this->include('templates/footer') ?>