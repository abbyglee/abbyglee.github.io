<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $name = $_POST["name"];
    $parentGuardian = $_POST["parentGuardian"];
    $printName = $_POST["printName"];
    $date = $_POST["date"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zipCode = $_POST["zipCode"];
    $cellPhone = $_POST["cellPhone"];
    $workPhone = $_POST["workPhone"];
    $childPhone = $_POST["childPhone"];
    $parentEmail = $_POST["parentEmail"];
    $childEmail = $_POST["childEmail"];

    // Now you can perform actions with the form data as needed
    // For example, you can save it to a database or send email notifications
    // Here's a simple example of sending an email notification:
    $to = "abigaillee@ucwv.edu"; // Change this to your email address
    $subject = "Form Submission from CTOC Website";
    $message = "Name: $name\n";
    $message .= "Parent or Guardian: $parentGuardian\n";
    $message .= "Print Name: $printName\n";
    // Add more fields as needed

    // Send the email
    mail($to, $subject, $message);

    // Redirect the user to a thank you page or back to the form page
    header("Location: thank_you.html");
    exit();
}
?>
