<?php
$page_title = "Find a Tutor | Tutorly";
$page_css   = "tutors.css";
include 'includes/data.php';
include 'includes/header.php';
require_once 'includes/db.php';

// Simple filtering using GET
$subject_filter = isset($_GET['subject']) ? strtolower(trim($_GET['subject'])) : '';
$city_filter    = isset($_GET['city']) ? strtolower(trim($_GET['city'])) : '';
?>

<h1>Find a Tutor</h1>

<form method="get" class="filter-form">
    <input type="text" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars($subject_filter); ?>">
    <input type="text" name="city" placeholder="City" value="<?php echo htmlspecialchars($city_filter); ?>">
    <button type="submit" class="btn btn-primary">Apply Filters</button>
</form>

<div class="tutor-list">
    <?php
    $results = 0;
    foreach ($tutors as $tutor) {
        $matches_subject = $subject_filter === '' || stripos($tutor['subject'], $subject_filter) !== false;
        $matches_city    = $city_filter === '' || stripos($tutor['city'], $city_filter) !== false;

        if ($matches_subject && $matches_city) {
            $results++;
            ?>
            <div class="tutor-card">
                <div class="tutor-card-img">
                    <img src="<?php echo htmlspecialchars($tutor['image']); ?>" alt="<?php echo htmlspecialchars($tutor['name']); ?>">
                </div>
                <div class="tutor-card-body">
                    <h2><?php echo htmlspecialchars($tutor['name']); ?></h2>
                    <p class="tutor-subject"><?php echo htmlspecialchars($tutor['subject']); ?> · <?php echo htmlspecialchars($tutor['level']); ?></p>
                    <p class="tutor-city"><?php echo htmlspecialchars($tutor['city']); ?></p>
                    <p class="tutor-rating">⭐ <?php echo $tutor['rating']; ?> · SAR <?php echo $tutor['price']; ?>/hour</p>
                    <div class="tag-list">
                        <?php foreach ($tutor['tags'] as $tag): ?>
                            <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="tutor_profile.php?id=<?php echo $tutor['id']; ?>" class="btn btn-secondary">View Profile</a>
                </div>
            </div>
            <?php
        }
    }

    if ($results === 0): ?>
        <p>No tutors match this search. Try changing your filters.</p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
