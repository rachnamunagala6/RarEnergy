<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the input data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address. Please enter a valid email.");
    }

    // Prepare the email content
    $to = "rachnamunagala@gmail.com";
    $subject = "New Inquiry from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Send the email
    $headers = "From: $email";
    if (mail($to, $subject, $email_content, $headers)) {
        // Email sent successfully
        echo "<h2>Thank you for your inquiry, $name!</h2>";
        echo "<p>Your inquiry has been sent successfully.</p>";
    } else {
        // Failed to send the email
        echo "Error: Unable to send the email. Please try again later.";
    }
} else {
    // If the form is accessed directly, display an error message or redirect to the form page.
    echo "Error: This page cannot be accessed directly.";
}

echo "success";

?>
