<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS System'); ?></title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; 
            background-color: #F8FAFC; 
            color: #0F172A;
            line-height: 1.5;
        }

        /* Dark Blue Header Navigation Bar */
        .header-bar {
            background-color: #0F172A; /* Primary Dark Blue */
            border-bottom: 3px solid #1E3A8A; /* Secondary Dark Blue Accent */
            padding: 0 30px;
        }

        .header-container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60px;
        }

        .system-title {
            color: #FFFFFF;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 4px;
        }

        .nav-menu a { 
            color: #FFFFFF; 
            text-decoration: none; 
            font-size: 0.9rem;
            font-weight: 500;
            padding: 18px 16px;
            display: inline-block;
            transition: background-color 0.15s ease;
        }

        /* Dark Blue Hover Effect */
        .nav-menu a:hover { 
            background-color: #1E3A8A;
        }

        /* Main Workspace Container */
        .main-wrapper {
            max-width: 1000px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .content-card {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 6px;
            padding: 32px;
            box-shadow: 0 1px 3px rgba(15, 23, 42, 0.05);
        }

        h1 {
            color: #0F172A;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 6px;
        }

        p.subtitle {
            color: #64748B;
            font-size: 0.9rem;
            margin-bottom: 24px;
            border-bottom: 1px solid #E2E8F0;
            padding-bottom: 12px;
        }

        /* Dark Blue Table Styling */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px;
            font-size: 0.9rem;
        }

        th { 
            background-color: #0F172A; /* Dark Blue Header */
            color: #FFFFFF; 
            padding: 12px 16px; 
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #1E3A8A;
        }

        td { 
            border-bottom: 1px solid #E2E8F0; 
            padding: 12px 16px; 
            color: #334155;
        }

        tr:nth-child(even) { 
            background-color: #F8FAFC; 
        }

        tr:hover {
            background-color: #F1F5F9;
        }
    </style>
</head>
<body>

<header class="header-bar">
    <div class="header-container">
        <div class="system-title">POS System</div>
        <nav>
            <ul class="nav-menu">
                <li><a href="<?= site_url('/'); ?>">Home</a></li>
                <li><a href="<?= site_url('about'); ?>">About</a></li>
                <li><a href="<?= site_url('customers'); ?>">Customer Accounts</a></li>
                <li><a href="<?= site_url('users'); ?>">User Accounts</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="main-wrapper">
    <div class="content-card">