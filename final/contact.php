<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <!-- Include any CSS file you have for styling -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.html'; ?>
    
    <div class="contact-content">
        <h2>Contact Us</h2>
        <p>Have a question or feedback? We'd love to hear from you!</p>
        <p>You can reach us by email at contact@example.com or fill out the form below:</p>
        
        <?php
        // Check if a success message is set
        if (isset($_GET['success'])) {
            echo "<p class='success'>" . htmlspecialchars($_GET['success']) . "</p>";
        }
        ?>
        
        <!-- Add your contact form here -->
        <form action="submit-contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea><br>
            
            <button type="submit">Send Message</button>
        </form>
    </div>

    <?php include 'footer.html'; ?>
</body>
</html>
