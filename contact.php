<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the data (You can add more processing logic here)

    // Example: Send an email (Make sure to configure your mail settings)
    $to = "your@email.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Message body
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    mail($to, $subject, $body, $headers);

    // Redirect to a thank you page or back to the homepage
    header("Location: index.php");
    exit();
}
?>
