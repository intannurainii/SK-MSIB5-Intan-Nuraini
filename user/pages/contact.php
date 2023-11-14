<?php
include '../templates/header.php';
?>

<section class="contact">
    <h2>Contact Us</h2>
    <div class="contact-form">
        <form action="send_email_script.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<?php
include '../templates/footer.php';
?>
