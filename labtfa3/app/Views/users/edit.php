<?= $this->include('templates/header') ?>

<div class="card shadow-sm border-0 max-w-2xl mx-auto">
    <div class="card-body p-4">
        <h3 class="fw-bold mb-3">Edit User Profile</h3>
        <p class="text-muted mb-4">Update user credentials and profile avatar.</p>

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

        <form action="<?= base_url('users/update/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control form-control-lg" value="<?= old('username', $user['username']) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Full Name</label>
                <input type="text" name="full_name" class="form-control form-control-lg" value="<?= old('full_name', $user['full_name']) ?>">
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Profile Avatar (JPG/PNG, Max 2MB)</label>
                
                <?php if (! empty($user['avatar'])): ?>
                    <div class="mb-3 d-flex align-items-center gap-3">
                        <img src="<?= base_url('public/uploads/' . $user['avatar']) ?>" class="rounded-circle border shadow-sm" width="70" height="70" style="object-fit: cover;">
                        <span class="text-muted small">Current Avatar</span>
                    </div>
                <?php endif; ?>

                <input type="file" name="avatar" class="form-control">
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success px-4">Update Profile</button>
                <a href="<?= base_url('users') ?>" class="btn btn-outline-secondary px-4">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?= $this->include('templates/footer') ?>