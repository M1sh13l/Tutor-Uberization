<?php
$page_title = "Tutorly | Find the right tutor in minutes";
$page_css   = "home.css";
include 'includes/header.php';
?>

<section class="hero">
    <div class="hero-text">
        <h1>Find the right tutor in minutes</h1>
        <p>Book qualified tutors for any subject in Saudi Arabia — online or face-to-face.</p>
        <div class="hero-buttons">
            <a href="tutors.php" class="btn btn-primary">Find a Tutor</a>
            <a href="register.php" class="btn btn-secondary">Become a Tutor</a>
        </div>
    </div>
    <div class="hero-image">
        <img src="assets/img/hero-student.jpg" alt="Student studying with tutor">
    </div>
</section>

<section class="search-shortcut">
    <h2>Search quickly</h2>
    <form action="tutors.php" method="get" class="search-form">
        <input type="text" name="subject" placeholder="Subject (e.g. Math)">
        <input type="text" name="city" placeholder="City (e.g. Jeddah)">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</section>

<section class="features">
    <h2>Why Tutorly?</h2>
    <div class="grid-3">
        <div class="card">
            <h3>Smart matching</h3>
            <p>Find tutors that fit your level, subject, and schedule.</p>
        </div>
        <div class="card">
            <h3>Local & online</h3>
            <p>Book online sessions or in-person sessions in your city.</p>
        </div>
        <div class="card">
            <h3>Secure bookings</h3>
            <p>Safe, trusted platform for parents and students.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
