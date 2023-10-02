<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve data from the form
    $parentName = $_POST["parentName"];
    $childName = $_POST["childName"];
    // Retrieve other form fields here...

    // Process the data as needed (e.g., store in a database, send email)
    // For sending email, you can use PHP's mail() function or a library like PHPMailer

    // Example of sending an email
    $to = "abigaillee@ucwv.edu";
    $subject = "Medical Release Form Submission";
    $message = "Parent Name: $parentName\nChild Name: $childName\n"; // Add other fields as needed
    $headers = "From: webmaster@example.com"; // Change this to your email address

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Form submitted successfully. Thank you!";
    } else {
        // Email sending failed
        echo "There was an error submitting the form. Please try again later.";
    }
} else {
    // Handle cases where the form wasn't submitted via POST
    echo "Invalid request.";
}
?>
