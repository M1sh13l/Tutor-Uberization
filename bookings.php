<?php
$page_title = "My Bookings | Tutorly";
include 'includes/header.php';
?>

<h1>My Bookings</h1>

<section class="bookings-hero card">
    <h2>Upcoming Sessions</h2>
    <p>Here you can see a demo of booked sessions, similar to a mobile “Bookings” tab.</p>
</section>

<section class="bookings-list">
    <!-- Demo booking 1 -->
    <div class="booking-card card">
        <div class="booking-card-main">
            <div>
                <h3>Anya Sharma</h3>
                <p class="booking-subject">Calculus, Physics</p>
                <p class="booking-meta">Online · Sun 8 Dec, 7:00 PM</p>
            </div>
            <div class="booking-right">
                <p class="booking-price">SAR 180</p>
                <span class="booking-status upcoming">Upcoming</span>
            </div>
        </div>
        <div class="booking-actions">
            <button class="btn btn-secondary">View Details</button>
            <button class="btn btn-primary">Message Tutor</button>
        </div>
    </div>

    <!-- Demo booking 2 -->
    <div class="booking-card card">
        <div class="booking-card-main">
            <div>
                <h3>Dr. Chen Li</h3>
                <p class="booking-subject">SAT Prep, Chemistry</p>
                <p class="booking-meta">In-person · Tue 10 Dec, 5:30 PM · Jeddah</p>
            </div>
            <div class="booking-right">
                <p class="booking-price">SAR 220</p>
                <span class="booking-status completed">Completed</span>
            </div>
        </div>
        <div class="booking-actions">
            <button class="btn btn-secondary">Book Again</button>
            <button class="btn btn-secondary">Rate Tutor</button>
        </div>
    </div>

    <!-- Demo booking 3 -->
    <div class="booking-card card">
        <div class="booking-card-main">
            <div>
                <h3>Fatimah Al-Qahtani</h3>
                <p class="booking-subject">English – Conversation</p>
                <p class="booking-meta">Online · Thu 12 Dec, 8:00 PM</p>
            </div>
            <div class="booking-right">
                <p class="booking-price">SAR 150</p>
                <span class="booking-status pending">Pending</span>
            </div>
        </div>
        <div class="booking-actions">
            <button class="btn btn-primary">Complete Payment</button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
