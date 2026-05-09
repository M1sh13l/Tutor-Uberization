<?php
include 'includes/data.php';
require_once 'includes/db.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$date = isset($_GET['date']) ? $_GET['date'] : '';
$time = isset($_GET['time']) ? $_GET['time'] : '';
$session_type = isset($_GET['session_type']) ? $_GET['session_type'] : 'online';

if (!isset($tutors[$id])) {
    $page_title = "Booking error | Tutorly";
    include 'includes/header.php';
    echo "<h1>Invalid tutor selected.</h1>";
    include 'includes/footer.php';
    exit;
}

$tutor = $tutors[$id];
$page_title = "Booking | " . $tutor['name'];
$page_css = "booking.css";
include 'includes/header.php';
?>

<h1>Booking & Payment</h1>

<div class="booking-layout">
    <div class="card booking-summary">
        <h2>Booking Summary</h2>
        <p><strong>Tutor:</strong> <?php echo htmlspecialchars($tutor['name']); ?></p>
        <p><strong>Subject:</strong> <?php echo htmlspecialchars($tutor['subject']); ?></p>
        <p><strong>Date:</strong> <?php echo htmlspecialchars($date); ?></p>
        <p><strong>Time:</strong> <?php echo htmlspecialchars($time); ?></p>
        <p><strong>Session type:</strong> <?php echo htmlspecialchars(ucfirst(str_replace('_', ' ', $session_type))); ?></p>
        <p><strong>Price:</strong> SAR <?php echo $tutor['price']; ?> / hour</p>
    </div>

    <div class="card booking-payment">
        <h2>Payment Details</h2>
        <form action="booking_success.php" method="post">
            <input type="hidden" name="id" value="<?php echo $tutor['id']; ?>">
            <input type="hidden" name="date" value="<?php echo htmlspecialchars($date); ?>">
            <input type="hidden" name="time" value="<?php echo htmlspecialchars($time); ?>">
            <input type="hidden" name="session_type" value="<?php echo htmlspecialchars($session_type); ?>">

            <label>Payment Method</label>
            <select name="payment_method" required>
                <option value="mada">Mada</option>
                <option value="visa">Visa / Mastercard</option>
                <option value="apple_pay">Apple Pay</option>
            </select>

            <label>Name on Card</label>
            <input type="text" name="card_name" required>

            <label>Card Number</label>
            <input type="text" name="card_number" maxlength="19" required>

            <label>Expiry</label>
            <div class="inline-inputs">
                <input type="text" name="exp_month" placeholder="MM" maxlength="2" required>
                <input type="text" name="exp_year" placeholder="YY" maxlength="2" required>
            </div>

            <label>CVV</label>
            <input type="password" name="cvv" maxlength="4" required>

            <button type="submit" class="btn btn-primary full-width">Confirm & Pay</button>

            <p class="form-note">This is a demo project — no real payment will be processed.</p>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
