<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    // Here you can send the email or perform any other actions
    
    // Set a success message
    $successMessage = "Message sent successfully!";
    
    // Redirect back to the contact page with the success message
    header("Location: contact.php?success=" . urlencode($successMessage));
    exit(); // Stop further execution
} else {
    // If the form wasn't submitted via POST method, redirect back to the contact page
    header("Location: contact.php");
    exit(); // Stop further execution
}
?>
