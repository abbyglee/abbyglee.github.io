<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["childName"];
    $email = $_POST["parentName"];
    
    // You should validate and sanitize the data here.

    $to = "your@example.com"; // Replace with your email address
    $subject = "Form Submission";
    $message = "Child's Name: $name\nParent/Guardian Name: $email";

    // Send the email
    if (mail($to, $subject, $message)) {
        header("Location: confirmation.html"); // Redirect to a confirmation page
        exit();
    } else {
        echo "Email could not be sent. Please try again later.";
    }
}
?>