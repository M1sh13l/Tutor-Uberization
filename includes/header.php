<?php
// includes/header.php
if (!isset($page_title)) {
    $page_title = "Tutorly";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Base shared styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Optional page-specific styles -->
    <?php if (isset($page_css)): ?>
        <link rel="stylesheet" href="assets/css/<?php echo htmlspecialchars($page_css); ?>">
    <?php endif; ?>
</head>
<body>


<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="index.php">Tutorly</a>
        </div>
        <nav class="main-nav">
            <a href="index.php">Home</a>
            <a href="tutors.php">Find a Tutor</a>
            <a href="contact.php">Contact</a>
        </nav>
        <div class="header-actions">
            <a href="login.php" class="btn btn-outline">Login</a>
            <a href="register.php" class="btn btn-primary">Sign Up</a>
        </div>
    </div>
</header>

<main class="main-content">
    <div class="container">
