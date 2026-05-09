<?php
$page_title = "Sign Up | Tutorly";
$page_css   = "auth.css";
include 'includes/header.php';
require_once 'includes/db.php';
?>

<h1 class="page-title-center">Create an account</h1>

<div class="page-center">
    <div class="card auth-card">
        <form method="post" action="#">
            <label>Full Name</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Role</label>
            <select name="role">
                <option value="student">Student / Parent</option>
                <option value="tutor">Tutor</option>
            </select>

            <button type="submit" class="btn btn-primary full-width">Sign Up</button>
            <p class="form-note">You can later connect this form to a real database with PHP.</p>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
