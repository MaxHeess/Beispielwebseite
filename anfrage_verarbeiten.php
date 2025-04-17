<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $motorrad = htmlspecialchars($_POST['motorrad']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Hier können Sie die Anfrage speichern oder per E-Mail versenden
    $to = "info@maxheess.de"; // E-Mail-Adresse des Shops
    $subject = "Neue Anfrage für: $motorrad";
    $message = "Name: $name\nE-Mail: $email\nMotorrad: $motorrad\n\nNachricht:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: danke.html");
    } else {
        echo "Beim Versenden Ihrer Anfrage ist ein Fehler aufgetreten.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>