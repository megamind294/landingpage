<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $companyName = $_POST['company-name'];
    $goal = $_POST['goal'];

    // Recipient email address
    $to = "sukanta.das@ahaansoftware.com"; // Change this to your email address

    // Subject of the email
    $subject = "New Website Development Inquiry";

    // Email body
    $message = "
    Name: $name\n
    Phone: $phone\n
    Email: $email\n
    Company Name: $companyName\n
    Goal: $goal
    ";

    // Email headers
    $headers = "From: rinkle.sharma@ahaansoftware,com"; // Change this to a valid sender address

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
