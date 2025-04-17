<?php
session_start();

// Überprüfen, ob der Button zum Leeren des Warenkorbs geklickt wurde
if (isset($_POST['clear_cart'])) {
    // Warenkorb leeren
    unset($_SESSION['cart']);

    // Weiterleitung oder Erfolgsnachricht
    echo "<script>alert('Der Warenkorb wurde geleert!'); window.location.href='warenkorb.php';</script>";
    exit();
} else {
    // Falls der Button nicht geklickt wurde, zurück zur Startseite
    header("Location: index.php");
    exit();
}
?>