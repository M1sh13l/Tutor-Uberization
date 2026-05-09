<?php
include 'includes/data.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (!isset($tutors[$id])) {
    $page_title = "Tutor not found | Tutorly";
    $page_css   = "profile.css";
    include 'includes/header.php';
    echo "<h1>Tutor not found</h1>";
    include 'includes/footer.php';
    exit;
}

$tutor = $tutors[$id];
$page_title = $tutor['name'] . " | Tutorly";
$page_css   = "profile.css";
include 'includes/header.php';

?>

<div class="tutor-profile">
    <div class="tutor-profile-header">
        <img src="<?php echo htmlspecialchars($tutor['image']); ?>" alt="<?php echo htmlspecialchars($tutor['name']); ?>" class="tutor-profile-img">
        <div>
            <h1><?php echo htmlspecialchars($tutor['name']); ?></h1>
            <p class="tutor-subject"><?php echo htmlspecialchars($tutor['subject']); ?> · <?php echo htmlspecialchars($tutor['level']); ?></p>
            <p class="tutor-city"><?php echo htmlspecialchars($tutor['city']); ?></p>
            <p class="tutor-rating">⭐ <?php echo $tutor['rating']; ?> · SAR <?php echo $tutor['price']; ?>/hour</p>
            <div class="tag-list">
                <?php foreach ($tutor['tags'] as $tag): ?>
                    <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="tutor-layout">
        <div class="tutor-main">
            <section class="card">
                <h2>About</h2>
                <p><?php echo htmlspecialchars($tutor['bio']); ?></p>
            </section>

            <section class="card">
                <h2>Reviews</h2>
                <p>(Here you can later connect to real reviews from a database.)</p>
                <ul>
                    <li>“Very helpful and explains clearly!” – Student A</li>
                    <li>“Helped me prepare for exams.” – Student B</li>
                </ul>
            </section>
        </div>

        <aside class="tutor-sidebar">
            <div class="card">
                <h2>Book a session</h2>
                <p>SAR <?php echo $tutor['price']; ?>/hour</p>
                <form action="booking.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $tutor['id']; ?>">
                    <label>Date</label>
                    <input type="date" name="date" required>
                    <label>Time</label>
                    <input type="time" name="time" required>
                    <label>Session Type</label>
                    <select name="session_type">
                        <option value="online">Online</option>
                        <option value="in_person">In-person</option>
                    </select>
                    <button type="submit" class="btn btn-primary full-width">Continue to Booking</button>
                </form>
            </div>
        </aside>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
