<?php
$page_title = "My Tasks | Task Manager";
$page_header = "My Assigned Tasks";
$page_description = "Manage and track your assigned work.";
include 'includes/header.php';
?>

<section class="card-section">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h3 style="font-weight: 600;">Task List</h3>
        <div style="display: flex; gap: 0.5rem;">
            <select class="form-input" style="width: auto; padding: 0.5rem;">
                <option>All Status</option>
                <option>Pending</option>
                <option>In Progress</option>
                <option>Completed</option>
            </select>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>TASK NAME</th>
                <th>DUE DATE</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-weight: 500;">Implement Dark Mode</td>
                <td style="color: var(--text-muted);">Feb 24, 2026</td>
                <td>
                    <span class="badge badge-success">Completed</span>
                </td>
                <td>
                    <button class="btn btn-primary" style="padding: 0.4rem 0.8rem; font-size: 0.875rem; width: auto;">View</button>
                </td>
            </tr>
            <tr>
                <td style="font-weight: 500;">Role Permission Logic</td>
                <td style="color: var(--text-muted);">Mar 05, 2026</td>
                <td>
                    <span class="badge badge-warning">Pending</span>
                </td>
                <td>
                    <button class="btn btn-primary" style="padding: 0.4rem 0.8rem; font-size: 0.875rem; width: auto;">View</button>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<?php include 'includes/footer.php'; ?>
