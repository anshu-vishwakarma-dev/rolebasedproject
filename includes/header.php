<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$role = $_SESSION['role'] ?? 'employee';
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Task Manager'; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="app-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div style="margin-bottom: 2rem;">
                <h2 style="font-size: 1.25rem; font-weight: 700; color: white;">TaskManager</h2>
            </div>
            
            <nav>
                <a href="dashboard.php" class="nav-item <?php echo $current_page == 'dashboard.php' ? 'active' : ''; ?>">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <a href="tasks.php" class="nav-item <?php echo $current_page == 'tasks.php' ? 'active' : ''; ?>">
                    <i class="fas fa-tasks"></i> My Tasks
                </a>
                
                <?php if ($role == 'admin' || $role == 'manager'): ?>
                <a href="manage-tasks.php" class="nav-item <?php echo $current_page == 'manage-tasks.php' ? 'active' : ''; ?>">
                    <i class="fas fa-edit"></i> Manage Tasks
                </a>
                <?php endif; ?>
                
                <?php if ($role == 'admin'): ?>
                <a href="manage-users.php" class="nav-item <?php echo $current_page == 'manage-users.php' ? 'active' : ''; ?>">
                    <i class="fas fa-users"></i> Users
                </a>
                <a href="settings.php" class="nav-item <?php echo $current_page == 'settings.php' ? 'active' : ''; ?>">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <?php endif; ?>
                
                <div style="margin-top: auto; padding-top: 2rem;">
                    <a href="logout.php" class="nav-item" style="color: var(--danger);">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content Wrapper -->
        <main class="main-content">
            <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                <div>
                    <h1 style="font-size: 1.5rem; font-weight: 700;"><?php echo $page_header ?? 'Dashboard Overview'; ?></h1>
                    <p style="color: var(--text-muted);"><?php echo $page_description ?? 'Welcome back! Here\'s what\'s happening today.'; ?></p>
                </div>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <span style="background: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.875rem; font-weight: 500; box-shadow: var(--shadow);">
                        Role: <span style="text-transform: capitalize; color: var(--primary);"><?php echo $role; ?></span>
                    </span>
                </div>
            </header>
