<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "yeohyj0323@gmail.com";
    $subject = "New Contact Form Submission";
    $message_body = "Name: $first_name $last_name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Phone: $phone\n";
    $message_body .= "Message:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message_body, $headers)) {
        echo '<p style="color: green;">Message sent successfully!</p>';
    } else {
        echo '<p style="color: red;">Error sending message. Please try again later.</p>';
    }
}

?>