<?php
$page_title = "Messages | Tutorly";
$page_css   = "messages.css";
include 'includes/header.php';


$tutorId = isset($_GET['tutor']) ? (int)$_GET['tutor'] : 0;

// Temporary mapping for demo:
$tutor_names = [
    1 => "Anya Sharma",
    2 => "Dr. Chen Li",
    3 => "Fatimah Al-Qahtani"
];

$tutor = isset($tutor_names[$tutorId]) ? $tutor_names[$tutorId] : "Tutor";
?>

<h1>Chat with <?php echo $tutor; ?></h1>

<div class="messages-container card">
    <div class="message tutor">
        Hello! How can I help you before our session?
    </div>
    <div class="message student">
        Hi! I want to review calculus topics about limits.
    </div>
</div>

<form class="message-form" method="post" action="#">
    <input type="text" placeholder="Type your message..." required>
    <button class="btn btn-primary">Send</button>
</form>

<?php include 'includes/footer.php'; ?>
