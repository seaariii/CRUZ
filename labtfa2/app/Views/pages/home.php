<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
</head>
<body>
    <?= view('templates/header'); ?>

        <h1>Welcome to the POS System Application</h1>
        <p>This is the landing page for your Point-of-Sale web application.</p>
        <p>Use the navigation links above to view Customer Accounts and User Accounts.</p>

    <?= view('templates/footer'); ?>
</body>
</html>

