<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Email information
    $to = "recipient@example.com"; // Replace with the recipient's email address
    $subject = "New form submission from $name";
    $headers = "From: $email";
    
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit();
    }
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you, $name! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    header("Location: your_form_page.html");
    exit();
}
?>
