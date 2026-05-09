<?php
$page_title = "Contact | Tutorly";
$page_css   = "contact.css";
include 'includes/header.php';
?>


<h1>Contact & Support</h1>

<div class="card">
    <p>If you have any questions about your tutoring sessions or want to report an issue, you can contact the platform team using this form.</p>
</div>

<div class="card contact-layout">
    <div class="contact-info">
        <h2>Platform Contact</h2>
        <p><strong>Email:</strong> support@tutorly.com (demo)</p>
        <p><strong>Phone:</strong> +966 5 0000 0000 (demo)</p>
        <p><strong>Working hours:</strong> 10:00 AM – 8:00 PM, Sunday–Thursday</p>
    </div>

    <div class="contact-form">
        <h2>Send a message</h2>
        <form action="#" method="post">
            <label>Your name</label>
            <input type="text" name="name" required>

            <label>Your email</label>
            <input type="email" name="email" required>

            <label>Topic</label>
            <select name="topic">
                <option value="general">General question</option>
                <option value="booking">Problem with a booking</option>
                <option value="tutor">Issue with a tutor</option>
                <option value="account">Account / login issue</option>
            </select>

            <label>Message</label>
            <textarea name="message" rows="4" required></textarea>

            <button type="submit" class="btn btn-primary full-width">Send</button>
            <p class="form-note">
                This is a demo project – the form is not connected to a real email server, but it shows how support would work.
            </p>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
