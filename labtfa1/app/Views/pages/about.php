<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
</head>
<body>
    <?= view('templates/header'); ?>

        <h1>About This System</h1>
        <p>This Point-of-Sale (POS) application demonstrates route configuration, controller structure, and view data handling in CodeIgniter 4 without an active database connection.</p>

        <h3>Features Included:</h3>
        <ul>
            <li>MVC Code Architecture</li>
            <li>Dynamic Route Management</li>
            <li>Data rendering using PHP static arrays</li>
        </ul>

    <?= view('templates/footer'); ?>
</body>
</html>