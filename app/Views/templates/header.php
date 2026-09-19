<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS System'); ?></title>
    <!-- Modern Sans-serif Font 'Inter' -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body { 
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; 
            background-color: #F8FAFC; 
            color: #0F172A;
            line-height: 1.5;
            display: flex;
            min-height: 100vh;
        }

        /* Left Sidebar Navigation Bar */
        .sidebar {
            width: 250px;
            background-color: #0F172A; /* Primary Dark Blue */
            border-right: 3px solid #1E3A8A; /* Secondary Dark Blue Accent */
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .system-title {
            color: #FFFFFF;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 24px 20px;
            border-bottom: 1px solid #1E293B;
            text-align: left;
        }

        .nav-menu {
            list-style: none;
            padding: 12px 0;
        }

        .nav-menu li {
            width: 100%;
        }

        .nav-menu a { 
            color: #94A3B8; 
            text-decoration: none; 
            font-size: 0.95rem;
            font-weight: 500;
            padding: 14px 20px;
            display: block;
            transition: all 0.15s ease;
        }

        /* Dark Blue Hover Effect */
        .nav-menu a:hover { 
            background-color: #1E3A8A;
            color: #FFFFFF;
        }

        /* Main Workspace Container - Expanded Padding */
        .main-wrapper {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        /* Full-Width Content Card */
        .content-card {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 6px;
            padding: 32px;
            box-shadow: 0 2px 4px rgba(15, 23, 42, 0.05);
            width: 100%;
            max-width: 100%; /* Spans full width of the screen */
            margin: 0;
        }

        /* Centered Formal Page Headers */
        h1 {
            color: #0F172A;
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -0.02em;
            text-align: center;
        }

        p.subtitle {
            color: #475569;
            font-size: 0.95rem;
            margin-bottom: 28px;
            border-bottom: 2px solid #0F172A;
            padding-bottom: 16px;
            text-align: center;
        }

        /* Table Styling with Inner Cell Borders Only */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px;
            font-size: 0.9rem;
            border: none;
        }

        th { 
            background-color: #0F172A; /* Dark Blue Header */
            color: #FFFFFF; 
            padding: 14px 18px; 
            text-align: center;
            font-weight: 600;
            border: 1px solid #0F172A; /* Visible dark borders between columns */
        }

        td { 
            border: 1px solid #0F172A; /* Visible dark borders for inner rows & columns */
            padding: 14px 18px; 
            color: #0F172A;
            text-align: center;
        }

        tr:nth-child(even) { 
            background-color: #F8FAFC; 
        }

        tr:hover {
            background-color: #E2E8F0;
        }
    </style>
</head>
<body>

<!-- Left Side Navigation Bar -->
<aside class="sidebar">
    <div class="system-title">POS System</div>
    <nav>
        <ul class="nav-menu">
            <li><a href="<?= site_url('/'); ?>">Home</a></li>
            <li><a href="<?= site_url('about'); ?>">About</a></li>
            <li><a href="<?= site_url('customers'); ?>">Customer Accounts</a></li>
            <li><a href="<?= site_url('users'); ?>">User Accounts</a></li>
        </ul>
    </nav>
</aside>

<main class="main-wrapper">
    <div class="content-card">