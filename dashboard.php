<?php
$page_title = "Dashboard | Task Manager";
$page_header = "Dashboard Overview";
$page_description = "Welcome back! Here's what's happening today.";
include 'includes/header.php';
?>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-label">Total Tasks</div>
        <div class="stat-val">12</div>
        <div style="color: var(--success); font-size: 0.75rem; font-weight: 600;">+2 this week</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Completed</div>
        <div class="stat-val">8</div>
        <div style="color: var(--text-muted); font-size: 0.75rem;">66% success rate</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Pending</div>
        <div class="stat-val">4</div>
        <div style="color: var(--warning); font-size: 0.75rem; font-weight: 600;">Action required</div>
    </div>
</div>

<section class="card-section">
    <h3 style="margin-bottom: 1.5rem; font-weight: 600;">Recent Task Activity</h3>
    <p style="color: var(--text-muted); text-align: center; padding: 2rem;">Task history will appear here.</p>
</section>

<?php include 'includes/footer.php'; ?>

