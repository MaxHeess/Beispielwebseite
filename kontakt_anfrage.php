<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
    $to = "max.heess@gmail.com";
    $subject = "Neue Nachricht vom Kontaktformular";

    $body = "<html><body>";
    $body .= "<h2>Neue Nachricht</h2>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>E-Mail:</strong> $email</p>";
    $body .= "<p><strong>Nachricht:</strong><br>$message</p>";
    $body .= "</body></html>";
    
    if (mail($to, $subject, $body)) {
        header("Location: danke.html");
        exit;
    } else {
        echo "Entschuldigung, es gab ein Problem beim Versenden Ihrer Nachricht.";
    }
}
?>