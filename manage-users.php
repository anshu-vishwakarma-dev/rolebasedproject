<?php
$page_title = "Manage Users | Task Manager";
$page_header = "User Management";
$page_description = "Manage system users and their roles.";
include 'includes/header.php';

if ($role != 'admin') {
    echo "<div style='padding: 2rem; background: #fee2e2; color: #991b1b; border-radius: var(--radius);'>Access Denied. Only Administrators can access this page.</div>";
    include 'includes/footer.php';
    exit();
}
?>

<div style="margin-bottom: 2rem;">
    <button class="btn btn-primary" style="width: auto;"><i class="fas fa-user-plus"></i> Add New User</button>
</div>

<section class="card-section">
    <h3 style="margin-bottom: 1.5rem; font-weight: 600;">System Users</h3>
    <table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ROLE</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-weight: 500;">Admin User</td>
                <td style="color: var(--text-muted);">admin@example.com</td>
                <td><span class="badge badge-warning">Admin</span></td>
                <td>
                    <i class="fas fa-user-edit" style="color: var(--primary); cursor: pointer; margin-right: 1rem;"></i>
                    <i class="fas fa-user-slash" style="color: var(--danger); cursor: pointer;"></i>
                </td>
            </tr>
            <tr>
                <td style="font-weight: 500;">Project Manager</td>
                <td style="color: var(--text-muted);">manager@example.com</td>
                <td><span class="badge badge-info">Manager</span></td>
                <td>
                    <i class="fas fa-user-edit" style="color: var(--primary); cursor: pointer; margin-right: 1rem;"></i>
                    <i class="fas fa-user-slash" style="color: var(--danger); cursor: pointer;"></i>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<?php include 'includes/footer.php'; ?>
