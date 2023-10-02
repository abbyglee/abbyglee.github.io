<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $childName = $_POST["childName"];
    $childDate = $_POST["childDate"];
    $parentName = $_POST["parentName"];
    $parentDate = $_POST["parentDate"];

    // You can perform validation and processing of the form data here

    // For demonstration purposes, you can simply display the form data
    echo "Child's Name: " . $childName . "<br>";
    echo "Child's Date: " . $childDate . "<br>";
    echo "Parent/Guardian Name: " . $parentName . "<br>";
    echo "Parent/Guardian Date: " . $parentDate . "<br>";
} else {
    echo "Form submission error.";
}
?>