<?= view('templates/header'); ?>

<h1>Customer Accounts Directory</h1>
<p>Listing of current customer records retrieved from database:</p>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($customers) && is_array($customers)): ?>
            <?php foreach ($customers as $index => $customer): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= esc($customer['full_name']); ?></td>
                    <td><?= esc($customer['email']); ?></td>
                    <td><?= esc($customer['phone']); ?></td>
                    <td><?= esc($customer['created_at']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No customer records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= view('templates/footer'); ?>