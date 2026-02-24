<?php
$page_title = "Settings | Task Manager";
$page_header = "System Settings";
$page_description = "Configure global application parameters.";
include 'includes/header.php';

if ($role != 'admin') {
    echo "<div style='padding: 2rem; background: #fee2e2; color: #991b1b; border-radius: var(--radius);'>Access Denied. Only Administrators can access this page.</div>";
    include 'includes/footer.php';
    exit();
}
?>

<div style="max-width: 600px;">
    <section class="card-section">
        <h3 style="margin-bottom: 1.5rem; font-weight: 600;">General Configuration</h3>
        <form>
            <div class="form-group">
                <label class="form-label">Application Name</label>
                <input type="text" class="form-input" value="Task Manager">
            </div>
            <div class="form-group">
                <label class="form-label">System Email</label>
                <input type="email" class="form-input" value="system@example.com">
            </div>
            <div class="form-group">
                <label class="form-label">Timezone</label>
                <select class="form-input">
                    <option>UTC</option>
                    <option selected>Asia/Kolkata</option>
                    <option>America/New_York</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="width: auto;">Save Changes</button>
        </form>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
