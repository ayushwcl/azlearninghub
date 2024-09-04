<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where the form will be sent
    $to = "ayushofficial651@gmail.com";  // Replace with your actual email address

    // Subject of the email
    $subject = "Contact Form Submission from " . $name;

    // Email body content
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message:\n" . $message . "\n";

    // Headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<div class='alert alert-success'>Message sent successfully! We will get back to you soon.</div>";
    } else {
        echo "<div class='alert alert-danger'>Message could not be sent. Please try again later.</div>";
    }
}
?>
