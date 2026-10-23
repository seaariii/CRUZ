<?= $this->include('templates/header') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">User Accounts Directory</h2>
        <p class="text-muted mb-0">Manage system users, access credentials, and profile avatars.</p>
    </div>
    <a href="<?= base_url('users/new') ?>" class="btn btn-primary px-4 shadow-sm">+ Add New User</a>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center" style="width: 90px;">Avatar</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th class="text-center" style="width: 120px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (! empty($users) && is_array($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td class="text-center">
                                    <?php if (! empty($user['avatar'])): ?>
                                        <img src="<?= base_url('public/uploads/' . $user['avatar']) ?>" alt="Avatar" class="rounded-circle border shadow-sm" width="48" height="48" style="object-fit: cover;">
                                    <?php else: ?>
                                        <div class="rounded-circle bg-dark text-white d-inline-flex align-items-center justify-content-center shadow-sm" style="width: 48px; height: 48px; font-weight: bold; font-size: 1.1rem;">
                                            <?= strtoupper(substr($user['username'], 0, 1)) ?>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-semibold"><?= esc($user['username']) ?></td>
                                <td><?= esc($user['full_name']) ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('users/edit/' . $user['id']) ?>" class="btn btn-sm btn-outline-primary px-3">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No user accounts found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>