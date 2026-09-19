<?= view('templates/header'); ?>

<h1>User & Staff Accounts Directory</h1>
<p>Listing of registered system staff and system roles:</p>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role / Access Level</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($users) && is_array($users)): ?>
            <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= esc($user['username']); ?></td>
                    <td><?= esc($user['full_name']); ?></td>
                    <td><?= esc($user['role']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No user records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= view('templates/footer'); ?>