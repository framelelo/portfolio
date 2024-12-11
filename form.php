<?php
// Start session to store CSRF token
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate CSRF token
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        die('Invalid CSRF token');
    }

    // Sanitize and validate inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Input validation
    if (empty($name) || empty($firstName) || empty($phone) || empty($email) || empty($message)) {
        echo "Merci de remplir les champs requis.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Merci de vérifier l'email.";
        exit;
    }

    // Process form data (e.g., save to database or send email)
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nFirst Name: $firstName\nPhone: $phone\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé.";
    } else {
        echo "Une erreur est survenue.";
    }
} else {
    echo "Désolé, vous ne pouvez pas accéder à cette page.";
}

// Generate a new CSRF token for the next form
$_SESSION['token'] = bin2hex(random_bytes(32));
?>
