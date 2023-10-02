<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $childName = $_POST["childName"];
    $childDate = $_POST["childDate"];
    $parentName = $_POST["parentName"];
    $parentDate = $_POST["parentDate"];
    
    // You can perform further validation on the form data if needed

    // Here you can process the data as needed, for example, save it to a database
    // or send it via email.
    
    // Example: Send an email with the form data
    $to = "recipient@example.com"; // Replace with the recipient's email address
    $subject = "New form submission from $childName";
    $message = "Child's Name: $childName\n"
             . "Child's Date: $childDate\n"
             . "Parent/Guardian Name: $parentName\n"
             . "Parent/Guardian Date: $parentDate\n";

    if (mail($to, $subject, $message)) {
        echo "Thank you, $childName! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Redirect the user back to the form if they accessed this script directly
    header("Location: your_form_page.html");
    exit();
}
?>