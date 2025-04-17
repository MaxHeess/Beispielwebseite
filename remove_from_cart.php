<?php
session_start();

// Überprüfen, ob eine Artikel-ID übergeben wurde
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Entfernen des Artikels aus dem Warenkorb
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }

    // Warenkorb neu indizieren (wichtig, um Lücken im Array zu vermeiden)
    $_SESSION['cart'] = array_values($_SESSION['cart']);

    // Weiterleitung zum Warenkorb
    header("Location: warenkorb.php");
    exit();
}
?>