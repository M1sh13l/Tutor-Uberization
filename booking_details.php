<?php
$page_title = "Booking Details | Tutorly";
include 'includes/header.php';

$bookingId = isset($_GET['booking']) ? (int)$_GET['booking'] : 0;
?>

<h1>Booking Details</h1>

<div class="card">
    <p><strong>Booking ID:</strong> #<?php echo $bookingId; ?></p>
    <p><strong>Tutor:</strong> Demo Tutor Name</p>
    <p><strong>Subject:</strong> Calculus & Physics</p>
    <p><strong>Date:</strong> Sun 8 Dec 2024</p>
    <p><strong>Time:</strong> 7:00 PM</p>
    <p><strong>Location:</strong> Online</p>
    <p><strong>Status:</strong> Upcoming</p>
</div>

<div class="card">
    <h2>Actions</h2>
    <a class="btn btn-primary full-width" href="messages.php?tutor=1">Message Tutor</a>
    <a class="btn btn-secondary full-width" href="tutors.php">View Tutor Profile</a>
</div>

<?php include 'includes/footer.php'; ?>
