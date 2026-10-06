<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Task Management System') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f4f5f7; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; flex-direction: column; min-height: 100vh; }
        .main-wrapper { flex: 1; }
        .sidebar { background-color: #c0262d; min-height: calc(100vh - 60px); color: #fff; border-radius: 0 24px 24px 0; }
        .sidebar .nav-link { color: rgba(255, 255, 255, 0.8); border-radius: 12px; margin-bottom: 8px; padding: 12px 18px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background-color: rgba(255, 255, 255, 0.2); color: #fff; font-weight: 600; }
        .dash-card { background: #fff; border-radius: 16px; border: none; box-shadow: 0 4px 12px rgba(0,0,0,0.03); }
        .badge-completed { background-color: #e6f4ea; color: #1e7e34; }
        .badge-pending { background-color: #fef3d6; color: #b25900; }
        .avatar-circle { width: 42px; height: 42px; background-color: #c0262d; color: #fff; font-weight: bold; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .app-footer { background-color: #1e1e1e; color: #aaa; font-size: 0.875rem; padding: 15px 0; }
    </style>
</head>
<body>
<div class="container-fluid main-wrapper">
    <div class="row">
        <!-- Sidebar Navigation -->
        <div class="col-md-3 col-lg-2 sidebar p-3 d-flex flex-column justify-content-between">
            <div>
                <div class="d-flex align-items-center mb-4 px-2 pt-2">
                    <i class="bi bi-check2-square fs-3 me-2"></i>
                    <span class="fs-5 fw-bold">TASKFLOW</span>
                </div>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="<?= site_url('/') ?>" class="nav-link <?= uri_string() == '' || uri_string() == '/' ? 'active' : '' ?>"><i class="bi bi-calendar-check me-2"></i> Today's Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('tasks') ?>" class="nav-link <?= uri_string() == 'tasks' ? 'active' : '' ?>"><i class="bi bi-list-task me-2"></i> All Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('profile') ?>" class="nav-link <?= uri_string() == 'profile' ? 'active' : '' ?>"><i class="bi bi-person me-2"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('about') ?>" class="nav-link <?= uri_string() == 'about' ? 'active' : '' ?>"><i class="bi bi-info-circle me-2"></i> About</a>
                    </li>
                </ul>
            </div>
            <div class="px-2 pb-3">
                <small class="text-white-50">TSA1 Task Manager</small>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-md-9 col-lg-10 p-4">
            <!-- Top Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold m-0"><?= esc($page_heading ?? 'Dashboard') ?></h3>
                <div class="d-flex align-items-center gap-3">
                    <div class="text-end">
                        <div class="fw-bold"><?= esc($user['full_name'] ?? 'Aryanne Chelsea Cruz') ?></div>
                        <small class="text-muted">@<?= esc($user['username'] ?? 'aryanne_cruz') ?></small>
                    </div>
                    <div class="avatar-circle">
                        <?= strtoupper(substr($user['full_name'] ?? 'A', 0, 1)) ?>
                    </div>
                </div>
            </div>