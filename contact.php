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
    $headers = "From: ";
    $headers .= $email;
    // Send the email
    mail($to, $email_subject, $email_body, $headers);
    header('Location: ../');
}
?>
