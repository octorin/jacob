<?php
// Check if the form was submitted with the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data and sanitize
    $firstName = htmlspecialchars(trim($_POST['fname']));
    $lastName = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $messageContent = htmlspecialchars(trim($_POST['message']));

    // Email details
    $to = "riniy11@gmail.com";
    $emailSubject = "Contact Form: " . $subject;
    $emailBody = "You have received a new message from your website contact form.\n\n" .
                 "Here are the details:\n\n" .
                 "Name: " . $firstName . " " . $lastName . "\n" .
                 "Email: " . $email . "\n\n" .
                 "Message:\n" . $messageContent;

    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send the email
    if (mail($to, $emailSubject, $emailBody, $headers)) {
        // If mail sent successfully, redirect to a thank you page or show a success message
        echo "Thank you for your message. It has been sent successfully!";
    } else {
        // If there was a problem sending the email
        echo "Sorry, there was an error sending your message. Please try again later.";
    }

} else {
    // If someone tries to access contact.php directly without submitting the form, they should see an error message
    echo "Error: Invalid request method.";
}
?>
