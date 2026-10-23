<?= $this->include('templates/header') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Customer Accounts Directory</h2>
        <p class="text-muted mb-0">Listing of current customer records retrieved from database.</p>
    </div>
    <a href="<?= base_url('customers/new') ?>" class="btn btn-primary px-4 shadow-sm">+ Add New Customer</a>
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
                        <th class="text-center" style="width: 60px;">#</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th class="text-center" style="width: 120px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (! empty($customers) && is_array($customers)): ?>
                        <?php foreach ($customers as $customer): ?>
                            <tr>
                                <td class="text-center fw-bold"><?= esc($customer['id']) ?></td>
                                <td class="fw-semibold"><?= esc($customer['full_name']) ?></td>
                                <td><?= esc($customer['email']) ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('customers/edit/' . $customer['id']) ?>" class="btn btn-sm btn-outline-primary px-3">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No customer records found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>