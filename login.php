<?php
$page_title = "Login | Tutorly";
$page_css   = "auth.css";
include 'includes/header.php';
require_once 'includes/db.php';
?>


<h1 class="page-title-center">Login</h1>

<div class="page-center">
    <div class="card auth-card">
        <form method="post" action="#">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" class="btn btn-primary full-width">Login</button>
            <p class="form-note">In this project version, login is not connected to a database yet.</p>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
