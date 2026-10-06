<?= view('templates/header', ['title' => 'User Profile - Dashboard', 'page_heading' => 'My Profile']) ?>

<!-- Profile Details -->
<div class="row">
    <div class="col-md-6">
        <div class="dash-card p-4 text-center mb-4">
            <div class="avatar-circle mx-auto mb-3" style="width: 80px; height: 80px; font-size: 32px;">
                <?= strtoupper(substr($user['full_name'] ?? 'A', 0, 1)) ?>
            </div>
            <h4 class="fw-bold mb-1"><?= esc($user['full_name'] ?? 'Aryanne Chelsea Cruz') ?></h4>
            <p class="text-muted">@<?= esc($user['username'] ?? 'aryanne_cruz') ?></p>
            <span class="badge bg-danger rounded-pill px-3 py-2">System Administrator</span>
        </div>

        <div class="dash-card p-4">
            <h5 class="fw-bold mb-3">Account Information</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    <span class="text-muted">User ID</span>
                    <span class="fw-semibold">#<?= esc($user['id'] ?? '1') ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    <span class="text-muted">Email Address</span>
                    <span class="fw-semibold"><?= esc($user['email'] ?? 'aryanne.cruz@example.com') ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    <span class="text-muted">Created At</span>
                    <span class="fw-semibold"><?= esc($user['created_at'] ?? date('Y-m-d H:i:s')) ?></span>
                </li>
            </ul>
        </div>
    </div>
</div>

<?= view('templates/footer') ?>