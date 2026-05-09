<?php
include 'includes/data.php';

$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$date = isset($_POST['date']) ? $_POST['date'] : '';
$time = isset($_POST['time']) ? $_POST['time'] : '';
$session_type = isset($_POST['session_type']) ? $_POST['session_type'] : '';
$payment_method = isset($_POST['payment_method']) ? $_POST['payment_method'] : '';

if (!isset($tutors[$id])) {
    $page_title = "Booking error | Tutorly";
    include 'includes/header.php';
    echo "<h1>Booking failed.</h1>";
    include 'includes/footer.php';
    exit;
}

$tutor = $tutors[$id];
$page_title = "Booking Confirmed | Tutorly";
$page_css = "booking.css";
include 'includes/header.php';
?>

<h1>Booking Confirmed 🎉</h1>

<div class="card">
    <p>Your session has been booked successfully.</p>
    <p><strong>Tutor:</strong> <?php echo htmlspecialchars($tutor['name']); ?></p>
    <p><strong>Date:</strong> <?php echo htmlspecialchars($date); ?></p>
    <p><strong>Time:</strong> <?php echo htmlspecialchars($time); ?></p>
    <p><strong>Session Type:</strong> <?php echo htmlspecialchars(ucfirst(str_replace('_', ' ', $session_type))); ?></p>
    <p><strong>Payment Method:</strong> <?php echo htmlspecialchars(ucfirst(str_replace('_', ' ', $payment_method))); ?></p>

    <a href="tutors.php" class="btn btn-secondary">Book another session</a>
    <a href="index.php" class="btn btn-primary">Back to Home</a>
</div>

<?php include 'includes/footer.php'; ?>
