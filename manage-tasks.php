<?php
$page_title = "Manage Tasks | Task Manager";
$page_header = "Manage All Tasks";
$page_description = "Create, assign, and monitor team activities.";
include 'includes/header.php';

if ($role != 'admin' && $role != 'manager') {
    echo "<div style='padding: 2rem; background: #fee2e2; color: #991b1b; border-radius: var(--radius);'>Access Denied. You do not have permission to view this page.</div>";
    include 'includes/footer.php';
    exit();
}
?>

<div style="margin-bottom: 2rem;">
    <button class="btn btn-primary" style="width: auto;"><i class="fas fa-plus"></i> Create New Task</button>
</div>

<section class="card-section">
    <h3 style="margin-bottom: 1.5rem; font-weight: 600;">Global Task List</h3>
    <table>
        <thead>
            <tr>
                <th>TASK</th>
                <th>ASSIGNED TO</th>
                <th>STATUS</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-weight: 500;">UI Redesign</td>
                <td>John Doe</td>
                <td><span class="badge badge-info">In Progress</span></td>
                <td>
                    <i class="fas fa-edit" style="color: var(--primary); cursor: pointer; margin-right: 1rem;"></i>
                    <i class="fas fa-trash" style="color: var(--danger); cursor: pointer;"></i>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<?php include 'includes/footer.php'; ?>
