<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data and sanitize
    $firstName = htmlspecialchars(trim($_POST['fname']));
    $lastName = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Compose the email
    $to = "riniy11@gmail.com";
    $emailSubject = "Contact Form Submission: " . $subject;
    $emailBody = "You have received a new message from your website contact form.\n\n" .
                 "Here are the details:\n\n" .
                 "Name: " . $firstName . " " . $lastName . "\n" .
                 "Email: " . $email . "\n\n" .
                 "Message:\n" . $message;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send the email
    if (mail($to, $emailSubject, $emailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
} else {
    // If not POST, return an error
    echo "There was a problem with the submission.";
}
?>
