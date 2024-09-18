<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first-name = htmlspecialchars($_POST['fname']);
    $last-name = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $topic = htmlspecialchars($_POST['topic']);

    $to = "nicole.lalta@rutgers.edu, yg566@rutgers.edu"; // Replace with your email addresses
    $subject = "New Message from Contact Form";
    $body = "Name: $first-name $last-name\nEmail: $email\nTopic:\n$topic";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>